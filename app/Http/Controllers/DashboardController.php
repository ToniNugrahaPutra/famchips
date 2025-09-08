<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers    = User::count();
        $totalProducts = Product::count();
        $totalArticles = Article::count();

        return view('dashboard.index', compact('totalUsers', 'totalProducts', 'totalArticles'));
    }
}
