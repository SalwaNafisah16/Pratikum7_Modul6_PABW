<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('dashboard', compact('uploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf,docx|max:2048'
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads', 'public');

        Upload::create([
            'nama_file' => $file->getClientOriginalName(),
            'path' => $path
        ]);

        return redirect()->back()->with('success', 'File berhasil diupload!');
    }
}
