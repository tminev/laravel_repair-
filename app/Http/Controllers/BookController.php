<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Autor;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        return view('books.index' , compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autors=Autor::all();
        return view('books.create', compact('autors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       

        $book = Book::create([
                'name'         => $request['name'],                
                'autor_id'     => $request['autor_id'], 
                'total_pages'  => $request['total_pages'],
                
            ]);
        
       
        
            
        return redirect()->route('books.index')->withSuccess('New Book Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autors=Autor::all();
        $book =Book::findOrFail($id);
        return view('books.edit', compact('book' , 'autors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->name         = $request['name'];                
        $book->autor_id     = $request['autor_id'];
        $book->total_pages  = $request['total_pages'];
        
        $book->save();
                       
        return redirect()->route('books.index')->withSuccess('New book Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $book = Book::find($id);
       
        $book->delete();
        return redirect()->route('books.index')->withSuccess('BOOK deleted');
    }
}
