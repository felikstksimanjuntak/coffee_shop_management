<?php

namespace App\Http\Controllers;

use App\Models\Sale;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();

        return view('sales.index', compact('sales'));
    }
}