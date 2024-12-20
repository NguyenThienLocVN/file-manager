<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('files.index', compact('files'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf,docx|max:2048',
        ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads'), $fileName);

        File::create([
            'name' => $fileName,
            'path' => 'uploads/' . $fileName,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }

    public function destroy($id)
    {
        $file = File::find($id);
        if ($file) {
            unlink(public_path($file->path));
            $file->delete();
        }
        return back()->with('success', 'File deleted successfully.');
    }
}

