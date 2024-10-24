<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

}
