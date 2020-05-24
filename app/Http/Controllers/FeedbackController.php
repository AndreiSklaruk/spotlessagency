<?php


namespace App\Http\Controllers;


use App\Mail\Feedback;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_wpcf7_unit_tag' => 'required',
            'first-name' => 'required|max:40',
            'last-name' => 'required|max:40',
            'email' => 'required|email|max:40',
            'g-recaptcha-response' => 'recaptcha',
        ]);
        $tag = '#' . $request->get('_wpcf7_unit_tag');

        if ($validator->fails()) {

            $errors = [];
            foreach ($validator->errors()->messages() as $name => $error) {
                array_push($errors, [
                    "idref" => null,
                    "into" => "span.wpcf7-form-control-wrap.$name",
                    "message" => $error[0]
                ]);
            }

            return response()->json([
                'into' => $tag,
                'invalidFields' => $errors,
                "message" => "One or more fields have an error. Please check and try again.",
                'status' => 'validation_failed'
            ]);
        }

        $data = $request->only([
            "how-did-you-hear",
            "subject",
            "pricing",
            "first-name",
            "last-name",
            "email",
            "your-message",
            "g-recaptcha-response"
        ]);

        Mail::to(config('mail.feedbackRecipient'))->send(new Feedback($data));

        return response()->json([
            'into' => $tag,
            "message" => "Thank you for your message. It has been sent.",
            'status' => 'mail_sent'
        ]);
    }
}
