<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function create()
    {
        return view('create');
    }


    public function saveBook(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'max:20'],
                'year' => ['sometimes', 'integer'],
                'pages' => ['required', 'integer'],

            ]
        );
        Book::create(
            [
                'name' => $request->name,
                'year' => $request->year,
                'pages' => $request->pages


            ]
        );
        return redirect()->route('create')->with('success', 'libro creato con successo');
    }
    public function index(Request $request)
    {
        $books = Book::all();
        return view('index', ['books' => $books]);
    }
    public function show(Book $book)
    {
        return view('show', ['book' => $book]);
    }
    public function edit(Book $book)
    {
        return view('edit', ['book' => $book]);
    }
    public function update(Request $request, Book $book)
    {
        $request->validate(
            [
                'name' => ['required', 'max:20'],
                'year' => ['sometimes', 'integer'],
                'pages' => ['required', 'integer'],

            ]
        );
        $book->update(
            [
                'name' => $request->name,
                'year' => $request->year,
                'pages' => $request->pages


            ]
        );
        return redirect()->route('create')->with('success', 'libro modificato con successo');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}
