<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('book', compact('book'));
    }

    public function showByCategory($id)
    {
        $category = Category::find($id);
        $books = Book::whereHas('categories', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->get();

        return view('category-books', compact('books', 'category'));
    }
}
