<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    
    public function suppliers(Request $request)
    {
        return view('Suppliers.index');
    }
    public function edit(Request $request)
    {
        return view('Suppliers.edit');
    }
}
