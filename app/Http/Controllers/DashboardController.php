<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $categoriCount = Category::count();
        $userCount = User::count();
        $rentlogs = RentLogs::with(['user', 'book'])->get();

        return view('dashboard', compact('bookCount', 'categoriCount', 'userCount', 'rentlogs'));
    }
}
