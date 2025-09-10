<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
     public function welcome()
    {
        $products = Product::all(); // Ambil semua produk
        return view('welcome', compact('products'));
    }
}
