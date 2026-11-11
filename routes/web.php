<?php

use Illuminate\Support\Facades\Route;

// my_comments --> end-point = "/"
// function returns the "welcome" view
// file name is "welcome", ".blade.php" is file extension
Route::get('/', function () {
    return view('welcome');
    // return 'Hello class'; // This returns only a string
});
