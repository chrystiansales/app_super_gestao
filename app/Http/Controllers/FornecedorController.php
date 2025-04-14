<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            '1 chrystian',
            '2 rafael',
            '3 andre',
            '4 teste',
            '5 teste',
            '6 teste',
            '7 teste',
            '8 teste',
            '10 teste',
            '11 teste',
            '12 teste',
            '13 teste',
            '14 teste',
            '15 teste',
            '16 teste',
            '17 teste',
            '18 teste',
            '19 teste',
            '20 teste',
            '21 teste',
            '22 teste'
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
