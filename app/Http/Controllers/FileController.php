<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function upload(Request $request)
    {
        $path = $request->file('upload')->store('images');
        $url = Storage::url($path);

        return response()->json([
            'fileName' => $path,
            'uploaded' => true,
            'url' => $url,
        ]);
    }
}
