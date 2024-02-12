<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'author_ids' => 'required|array',
        'author_ids.*' => 'exists:authors,id',
    ]);

    $book = new Book();
    $book->title = $request->title;
    $book->save();

    $book->authors()->attach($request->author_ids);

    return redirect('/books')->with('success', 'Book added successfully.');
}

// public function store(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string|max:255',
//         'author_ids' => 'required|array',
//         'author_ids.*' => 'exists:authors,id',
//     ]);

//     $book = Book::create([
//         'title' => $request->title,
//     ]);

//     $book->authors()->attach($request->author_ids);

//     return redirect('/books')->with('success', 'Book added successfully.');
// }


}
