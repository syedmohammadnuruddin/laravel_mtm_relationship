<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(){
        return view("authors.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author = new Author();
        $author->name = $request->name;
        $author->save();

        return redirect('/authors')->with('success', 'Author added successfully.');
    }
}
