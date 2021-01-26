<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return view('example.index');
    }

    public function example1()
    {
        return view('example.example1');
    }
}
