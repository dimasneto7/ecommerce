<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request) {
        $data = [];

        // Buscar todos os produtos
        // Tipo... select * from produtos
        $listaProdutos = \App\Models\Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

    public function categoria(Request $request) {
        $data = [];

        return view("categoria", $data);
    }

}
