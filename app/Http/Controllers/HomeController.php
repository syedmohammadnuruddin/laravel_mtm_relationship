<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $books = Book::all();
        $authors = Author::all();
        return view("index",compact("books","authors"));
    }
}
