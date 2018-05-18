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

    public function deleteBook($id)
    {
        $book = Book::find($id);
            if($book->delete()) {
            return 'berhasil';
        }
    }

    public function readBook(Request $request)
    {
        $book = Book::all();
        return $book ;
    }

    public function updateBook(Request $request)
    {
        $id =$request->get('id');
    
        $data = [
            'name' =>$request->get('name'),
            'judul' => $request->get('judul') ,
            'pengarang' => $request->get('pengarang') ,
            'penerbit' => $request->get('penerbit') ,
        ];
        $update = Book::where('id', $id)->update($data);
        if ($update){
            return 'berhasil';
        }
    }
}
