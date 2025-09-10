<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('user')->latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function frontendIndex()
    {
        $products = Product::latest()->paginate(12); // atau ambil semua
        return view('frontend.produk', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'weight'       => 'required|string|max:100',
            'variant'      => 'required|string|max:100',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ingredients'  => 'required|string',
            'expired_date' => 'required|date',
            'description'  => 'nullable|string',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name'         => $request->name,
            'weight'       => $request->weight,
            'variant'      => $request->variant,
            'image'        => $imagePath,
            'ingredients'  => $request->ingredients,
            'expired_date' => $request->expired_date,
            'description'  => $request->description,
            'user_id'      => auth()->id(),
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'weight'       => 'required|string|max:100',
            'variant'      => 'required|string|max:100',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'ingredients'  => 'required|string',
            'expired_date' => 'required|date',
            'description'  => 'nullable|string',
        ]);

        $data = $request->only(['name', 'weight', 'variant', 'ingredients', 'expired_date', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus');
    }
}
