<?php

namespace App\Http\Controllers;

use Input;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function addBook(Request $request)
    {
        $book = new Book;
        $book->name = $request->input('name');
        $book->judul = $request->input('judul');
        $book->pengarang = $request->input('pengarang');
        $book->penerbit = $request->input('penerbit');
        if($book->save()) {
            return 'berhasil';
        }
    }
}
