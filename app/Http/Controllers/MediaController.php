<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MediaController extends Controller
{
    public function form()
    {
        return view('mediaDownload');
    }

    public function store(Request $request)
    {
        $uploadedFile = $request->file('media');

        $filename = time() . $uploadedFile->getClientOriginalName();
        Storage::putFileAs(
            'media/',
            $uploadedFile,
            $filename
        );

        return redirect('/media');
    }
}
