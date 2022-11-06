<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class UserController extends Controller
{
    public function index(){
        return view('user');
    }

    public function reserve(){
        $books = Book::all();
        return view('reserve', ['books' => $books]);
    }
}
