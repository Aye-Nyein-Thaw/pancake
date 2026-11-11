<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// file name is "welcome", ".blade.php" is file extension
// my_comments --> end-point = "/"
// initially, function returns the "welcome" view
// then we added WelcomeController class and moved the function there
// Note: needs both class name and function name
// give the route a name    ->name(name:'welcome')
// Below is Laravel sytax - it's a routing table
Route::get('/', [WelcomeController::class, 'index'])->name(name:'welcome');
