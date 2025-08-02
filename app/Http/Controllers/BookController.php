<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('create', compact('authors'), compact('categories'));
    }


    public function saveBook(Request $request)
    {
        $request->validate(
            [
                'name' => ['required'],
                'year' => ['sometimes', 'integer'],
                'pages' => ['required', 'integer'],

            ]
        );
        $book = Book::create(
            [
                'name' => $request->name,
                'year' => $request->year,
                'pages' => $request->pages,
                'author_id' => $request->author_id,



            ]

        );
        $book->categories()->attach($request->categories);

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
        $authors = Author::all();
        $categories = Category::all();
        return view('edit', compact('authors', 'book', 'categories'));
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
        $book->categories()->detach();
        $book->categories()->attach($request->categories);
        $book->update(
            [
                'name' => $request->name,
                'year' => $request->year,
                'pages' => $request->pages,
                'author_id' => $request->author_id


            ]
        );

        return redirect()->route('index')->with('success', 'libro modificato con successo');
    }
    public function destroy(Book $book)

    {
        $book->categories()->detach();
        $book->delete();
        return redirect()->route('index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}
