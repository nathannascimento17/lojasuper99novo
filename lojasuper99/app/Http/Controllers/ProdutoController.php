<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {

        $this->produto = $produto;
    }
    public function cadProduto()
    {
        return view('produto.cadproduto');
    }

    public function cadastrarProduto(Request $request)
    {

        $dataProduto = $request->all();

        $insert = $this->produto->create($dataProduto);


        if ($insert)
            return redirect()->route('index');
        else
            return redirect()->back()->with(['errors' => 'Falha ao cadastrar o produto']);
    }
}
