<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'forn1',
                'status' => 'N',
                'cnpj' => '0'
            ]
        ];
    }
}
