<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function ckeditorUploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {

            $image = $request->file('upload');
            $name = $image->hashName();
            $path = $image->store('temp', 'public');

            return response()->json([
                'path' => $path,
                'uploaded' => true,
                'fileName' => $name,
                'url' => asset('storage/' . $path),
            ]);
        }

    }
}