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

    public function painelAdmin()
    {
        $produtos = Produto::all();
        return view('admin.painelAdmin', compact("produtos"));
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

    public function edit($id)
    {
        $produto = $this->produto->find($id);

        return view('produto.cadproduto', compact('produto'));
    }

    public function update(Request  $request, $id)
    {

        $dataForm = $request->all();

        $produto = $this->produto->find($id);

        $update = $produto->update($dataForm);

        if ($update)
            return redirect()->route('produto.painelAdmin');
        else
            return redirect()->route('produto.edit', $id)->with(['errors' => 'Falha ao Editar']);
    }

    public function index(Request $request)
    {

        $categoriaId = $request->input('categoria_id');

        $products = $categoriaId ? Produto::where('categoria', $categoriaId) : Produto::all();

        return view("home.index", compact('products'));
    }
}
