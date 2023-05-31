<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $songs = Upload::all();
        return view('library', compact('songs'));
    }

    public function create()
    {
        return view('song.upload');
    }

    public function store(UploadRequest $request)
    {
        Upload::create(
            [
                'title' => $request->title,
                'artist' => $request->artist,
                'date' => $request->date,
                'cover' => $request->file('cover')->store('public/media'),
                'user_id' => Auth::id()
            ]
        );
        return redirect(route('library'))->with('status', 'Song added successfully!');
    }

    public function show(Upload $song, $id)
    {
        $song = Upload::findOrFail($id);
        return view('song.details', compact('song'));
    }

    public function edit(Upload $song)
    {
        return view('song.edit', compact('song'));
    }

    public function update(Request $request, Upload $song)
    {
        $song->update(
            [
                'title' => $request->title,
                'artist' => $request->artist,
                'date' => $request->date,
            ]
        );

        if ($request->cover) {
            $song->update(['cover' => $request->file('cover')->store('public/media')]);
        }

        return redirect(route('library'))->with('status', 'Song modified successfully!');
    }

    public function destroy(Upload $song)
    {
        $song->delete();
        return redirect(route('library'))->with('status', 'Song removed successfully!');
    }
}
