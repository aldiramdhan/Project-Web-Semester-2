<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        
        return view('landing-page/master', compact('books'));
    }

    public function category()
    {
        $categories = Category::all();

        return view('landing-page/kategori', compact('categories'));
    }

    public function book()
    {
        $books = Book::all();

        return view('landing-page/buku', compact('books'));
    }

    public function about()
    {
        return view('landing-page/about');
    }
}
