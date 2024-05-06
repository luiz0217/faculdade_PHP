<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prod extends Controller
{
    public function Produto1()
    {
        return view('header') . view('prod1') . view('footer');
    }
    public function Produto2()
    {
        return view('header') . view('prod2') . view('footer');
    }
    public function Produto3()
    {
        return view('header') . view('prod3') . view('footer');
    }
}
