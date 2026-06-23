<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CustomerController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('customer.index', compact('products'));
    }
}