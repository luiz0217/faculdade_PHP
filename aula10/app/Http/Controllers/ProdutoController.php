<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Product::create([
            "name"=> $request->name,
            "price"=> $request->price,
            "description"=> $request->description
        ]);
    }
}
