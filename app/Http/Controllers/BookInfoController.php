<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookInformation;

class BookInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['book_information'] = BookInformation::all();
        return view('book_information.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book_information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book_information = new BookInformation();
        $request->validate([
            'book_title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'ISBN'=>'required',  
            'publish_year'=>'required|date', 
        ]);
             

         $book_information ->book_title      = $request['book_title'];
         $book_information ->author          = $request['author'];
         $book_information ->description     = $request['description'];
         $book_information ->ISBN            = $request['ISBN'];
         $book_information ->publish_year    = $request['publish_year'];
         $book_information ->save();

        // return back()->with('success', 'Data saved successfuly!.');  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['book_information'] = BookInformation::all();
        return view('book_information.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book_information = new BookInformation();
        $request->validate([
            'book_title'=>'required',
            'author'=>'required',
            'description'=>'required',
            'ISBN'=>'required',  
            'publish_year'=>'required|date', 
        ]);
             

         $book_information ->book_title      = $request['book_title'];
         $book_information ->author          = $request['author'];
         $book_information ->description     = $request['description'];
         $book_information ->ISBN            = $request['ISBN'];
         $book_information ->publish_year    = $request['publish_year'];
         $book_information ->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book_information = BookInformation::find($id);
        $book_information->delete();

        return redirect()->to('book_information');
    }
}
