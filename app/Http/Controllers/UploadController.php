<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function upload()
    {
        return view('upload');
    }
    public function saveSong(Request $request)
    {
        $song = Upload::create(
            [
                'title' => $request->title,
                'author' => $request->author,
                'date' => $request->date,
                'cover' => $request->file('cover')->store('public/media')
            ]
        );
        return redirect(route('library'))->with('status', 'Song added successfully!');
    }
    public function library()
    {
        $songs = Upload::all();
        return view('library', compact('songs'));
    }
    public function details($id)
    {
        $song = Upload::findOrFail($id);
        return view('song-details', compact('song'));
    }
}
