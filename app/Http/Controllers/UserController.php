<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookInfo;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookInfo::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
        $student = new BookInfo();
        $student -> title = $request ['title'];
        $student -> author = $request ['author'];
        $student -> description = $request ['description'];
        $student -> isbn = $request ['ISBN'];
        $student -> year = $request ['published year'];
        $student -> save();
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
        $student = new BookInfo();
        $student -> fname = $request ['title'];
        $student -> lname = $request ['author'];
        $student -> email = $request ['description'];
        $student -> phone = $request ['ISBN'];
        $student -> address = $request ['published year'];
        $student -> save();
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = BookInfo::find($id);
        $student->delete();
    }
}
