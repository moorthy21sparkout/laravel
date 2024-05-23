<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);
        if ($request->hasFile('file')) {
            if ($request->file('file')->isValid()) {
                $path = $request->file('file')->move(public_path('uploads'), $request->file('file')->getClientOriginalName());

                $url = Storage::url($path);
                $image = new FileUpload();
                $image->image = $request->file;
                $image->save();


                return back()->with('success', 'file upload successfully')->with('file_url', $url);
            }
            return back()->withErrors(['file' => 'file upload failed']);
        }
        //    $data= $request->validate([
        //         'file'=>'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
        //     ]);
        //     //   dd($data);

        //     $fileName=time() . ".". $request->file('file')->guessExtension();

    }
    function show()
    {
        $datas = FileUpload::all();
        return view('show', compact('datas'));
    }
}
