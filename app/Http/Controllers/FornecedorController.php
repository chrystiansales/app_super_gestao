<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            'chrystian',
            'rafael',
            'andre',
            'teste',
            'teste',
            'teste',
            'teste',
            'teste',
            'teste',
            'teste',
            'teste',
            'teste'
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
