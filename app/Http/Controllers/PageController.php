<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function homepage()
    {
        $books = Book::all();
        return view('homepage', ['books' => $books]);
    }

    public function detail(Book $book)
    {
        return view('detail', ['book' => $book]);
    }
}
