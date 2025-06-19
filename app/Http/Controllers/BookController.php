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
}
