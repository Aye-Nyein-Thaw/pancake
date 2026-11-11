<?php

namespace App\Http\Controllers;    // address of the file

use Illuminate\Http\Request;       // import package like in python - 

class WelcomeController extends Controller
{
    // in a class, you can't write anything directly
    // It needs to be inside a function

    function index() {
    return view('welcome');
    // just testing - return 'Hello class'; // This returns only a string
    }

}
