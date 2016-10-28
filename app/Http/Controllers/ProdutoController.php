<?php
namespace App\Http\Controllers;
use App\produto;
use Illuminate\Support\Facades\DB;
use Request;
class ProdutoController extends Controller {
    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(){
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        DB::insert('insert into produtos values (null, ?, ?, ?, ?)',
            array($nome, $valor, $descricao, $quantidade));
        return redirect('/produtos')->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }
}