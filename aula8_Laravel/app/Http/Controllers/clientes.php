<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientes extends Controller
{
    public function clientes()
    {
        return view('header') . view('clientes') . view('footer');
    }
}
