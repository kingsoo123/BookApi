<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;
use App\Http\Resources\Book\BookResource;
use App\Http\Resources\Book\BookCollection;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  BookCollection::Collection(Book::all());

    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = new Client();
        $request = $client->get('https://anapioficeandfire.com/api/books/1');
        $apiResult= json_decode($request->getBody(), false);
        $bookname = $apiResult->name;


        return Book::create([
            'bookname' =>'menn',
            'author'=>'kingsley'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
