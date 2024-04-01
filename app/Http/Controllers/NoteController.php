<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    //
    public function createNote(Request $request)
    {
        $note = new Note();
        $note->title = $request->title;
        $note->body = $request->body;
        $note->save();
        return redirect()->route('homepage');
    }
    public function showNotes()
    {
        $show = Note::all();
        return view('show', ['data' => $show]);
    }
    public function singleNote(Note $note)
    {
        return view('singleNote', ['record' => $note]);
    }
    public function deleteNote(Note $note)
    {
        $note->delete();
        return redirect()->route('show');
    }
}
