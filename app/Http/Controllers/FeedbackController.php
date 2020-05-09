<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request)
    {
        $validator = Validator::make($request->all(), [
            '_wpcf7_unit_tag' => 'required',
            'first-name' => 'required|max:40',
            'last-name' => 'required|max:40',
            'email' => 'required|email|max:40',
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
//        $request->validate([
//            'first-name' => 'required|max:40',
//            'last-name' => 'required|max:40',
//            'email' => 'required|email|max:40',
//        ]);

        $data = $request->all();
        dd($data);
        return 'ok';
    }
}
