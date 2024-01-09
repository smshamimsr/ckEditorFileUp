<?php

namespace App\Http\Controllers;

use App\Models\Ckupload;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCkuploadRequest;
use App\Http\Requests\UpdateCkuploadRequest;

class CkuploadController extends Controller
{
    public function ckUpload()
    {
        return view('welcome');
    }

    public function ckeditorUpload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extention = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extention;
            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
