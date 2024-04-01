<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function createNote(Request $request)
    {
        $note = new Note();
        $note->title = $request->input('title');
        $note->body = $request->input('body');
        $note->save();
        return redirect()->route('homepage');
    }
}
