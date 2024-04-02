<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    //

    public function home()
    {
        $notes = Note::cursorPaginate(10);
        return view('home', ['notes' => $notes]);
    }
    public function createNote(Request $request)
    {
        // we can use validate which is use to validate the input feilds
        $request->validate([
            'title' => 'required',
            // Also set up in array
            'slug' => ['required', 'unique:notes', 'max:255'],
            'body' => 'required',
        ]);

        $note = new Note();
        $note->title = $request->title;
        $note->slug = $request->slug;
        $note->body = $request->body;
        $note->save();
        return redirect()->route('show');
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
