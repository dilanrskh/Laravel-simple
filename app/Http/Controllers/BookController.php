<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $buku = Book::all();

        return view('index', compact('buku'));
    }

    public function create(){
        return view('book.tambahdata');
    }

    public function store(Request $request){

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'page' => $request->page,
            'year' => $request->year,
        ]);

        return redirect()->route('home.book')->with('Ok', 'Berhasil menambahkan data');
    }

    public function formEdit($id){

        $buku = Book::findOrFail($id);

        return view('book.editdata', compact('buku'));
    }

    public function update(Request $request, $id){

        $buku = Book::findOrFail($id);

        $buku->title = $request->title;
        $buku->author = $request->author;
        $buku->page = $request->page;
        $buku->year = $request->year;

        $buku->update();

        return redirect()->route('home.book')->with('Update', 'Berhasil Update data');

    }

    public function delete(Request $request){

        $buku = Book::findOrFail($request->id);
        $buku->delete();
        
        return redirect()->route('home.book')->with('Hapus', 'Berhasil Hapus data');
    }

    public function show($id){

        $buku = Book::findOrFail($id);

        return view('book.show', compact('buku'));
    }
}
