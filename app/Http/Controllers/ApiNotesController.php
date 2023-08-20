<?php

namespace App\Http\Controllers;

use App\Http\Requests\v1\UpdateNoteRequest;
use App\Http\Resources\NoteCollection;
use App\Http\Resources\NoteResource;
use App\Note;
use Illuminate\Http\Request;

class ApiNotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return NoteResource::collection(Note::all());
        return new NoteCollection(Note::all());
        // return response()->json(Note::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $note = Note::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);

        return new NoteResource($note);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
{
    return new NoteResource($note);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNoteRequest $request, Note $note)
{
    $note->update([
        'title' => $request->input('title'),
        'text' => $request->input('text'),
    ]);

    return new NoteResource($note);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return response()->json(['message' => 'Note deleted successfully']);
    }
}
