<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request) {
        $data = [];

        // Buscar todos os produtos
        // Tipo... select * from produtos
        $listaProdutos = Produto::all();
        $data["lista"] = $listaProdutos;

        return view("home", $data);
    }

    public function categoria($idcategoria = 0, Request $request) {
        $data = [];

        $listaCategorias = Categoria::all();
        $queryProduto = Produto::limit(4);

        if($idcategoria != 0) {
            $queryProduto->where("categoria_id", $idcategoria);
        }

        $listaProdutos = $queryProduto->get();

        $data["lista"] = $listaProdutos;
        $data["listaCategoria"] = $listaCategorias;
        $data["idcategoria"] = $idcategoria;

        return view("categoria", $data);
    }

}
