<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function purchases(Request $request)
    {
        return view('purchases.index');
    }
}
