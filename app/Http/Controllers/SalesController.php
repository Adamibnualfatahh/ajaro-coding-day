<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales(Request $request)
    {
        return view('sales.index');
    }
}
