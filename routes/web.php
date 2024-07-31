<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookInfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('book_information', BookInfoController::class);