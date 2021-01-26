<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(Request $request)
    {
        return view('products.index');
    }
    public function edit(Request $request)
    {
        return view('products.edit');
    }
}
