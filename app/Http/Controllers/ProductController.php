<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
        }

        Product::create([
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($product->image) {
                $oldPath = public_path('uploads/products/' . $product->image);
                if (file_exists($oldPath)) unlink($oldPath);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/products'), $imageName);
            $product->image = $imageName;
        }

        $product->name  = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            $path = public_path('uploads/products/' . $product->image);
            if (file_exists($path)) unlink($path);
        }
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Produk berhasil dihapus');
    }
}