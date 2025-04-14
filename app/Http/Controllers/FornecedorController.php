<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '12345678901234',
                'ddd' => '11', //sao paulo
                'telefone' => '987654321',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '12345678901234',
                'ddd' => '85', //fortaleza
                'telefone' => '987654321',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj' => '12345678901234',
                'ddd' => '32', //minas gerais
                'telefone' => '987654321',
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
