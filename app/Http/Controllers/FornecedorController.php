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
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => '12345678901234',
                'ddd' => '21', //rio de janeiro
                'telefone' => '987654321',
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status' => 'N',
                'cnpj' => '12345678901234',
                'ddd' => '41', //parana
                'telefone' => '987654321',
            ],
            5 => [
                'nome' => 'Fornecedor 6',
                'status' => 'S',
                'cnpj' => '12345678901234',
                'ddd' => '51', //rio grande do sul
                'telefone' => '987654321',
            ],
            6 => [
                'nome' => 'Fornecedor 7',
                'status' => 'N',
                'cnpj' => '12345678901234',
                'ddd' => '61', //distrito federal
                'telefone' => '987654321',
            ],
            7 => [
                'nome' => 'Fornecedor 8',
                'status' => 'S',
                'cnpj' => '12345678901234',
                'ddd' => '71', //bahia
                'telefone' => '987654321',
            ],
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
