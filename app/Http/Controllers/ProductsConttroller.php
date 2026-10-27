<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsConttroller extends Controller
{
    public function index() {
        return view('products.index');
    }
}
