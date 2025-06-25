<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //mostra tutti gli autori
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        //
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'firstName' => ['required', 'string'],
                'lastName' => ['sometimes', 'string'],
                'birthDate' => ['sometimes', 'date'],

            ]
        );
        Author::create(
            [
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'birthDate' => $request->birthDate


            ]
        );

        return redirect()->route('authors.create')->with('success', 'autore creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)

    {
        return view('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)

    {

        $request->validate(
            [
                'firstName' => ['required', 'string'],
                'lastName' => ['sometimes', 'string'],
                'birthDate' => ['sometimes', 'date'],

            ]
        );
        $author->update(
            [
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'birthDate' => $request->birthDate


            ]
        );

        return redirect()->route('authors.create')->with('success', 'autore aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}
