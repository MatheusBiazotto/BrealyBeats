<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProdutoController extends Controller
{
    // FUNÇÃO BEATS, ONDE MOSTRA TODOS OS BEATS CADASTRADOS NO BANCO DE DADOS
    public function produtos(Request $request){
        $data = [];

        $data['lista_beats'] = Produto::all();

        return view('beats', $data);
    }

    // FUNÇÃO DA VIEW CATEGORIAS, ONDE PUXA AS CATEGORIAS E MOSTRA BEATS QUE POSSUEM ESSA CATEGORIA
    public function categorias($id_categoria = 0, Request $request){
        $data = [];

        $consultaBeats = Produto::limit(10);

        if($id_categoria != 0){
            $consultaBeats->where('id_categoria', $id_categoria);
        }

        $data['lista_categorias'] = Categorias::all();
        $data['lista_beats'] = $consultaBeats->get();

        $data['id_categoria'] = $id_categoria;

        return view('categorias', $data);
    }

    //FUNÇÃO ADICIONA ITEM CARRINHO
    public function add_carrinho($idprod = 0, Request $request){
        $beat = Produto::find($idprod);

        if (isset($beat)){
            $carrinho = session('cart', []);

            array_push($carrinho, $beat);

            session(['cart' => $carrinho]);
        }

        return redirect()->route('carrinho');
    }

    //FUNÇÃO REMOVE ITEM CARRINHO
    public function remove_carrinho($iditem = 0, Request $request){
        $carrinho = session('cart', []);

      if(isset($carrinho[$iditem])){
        unset($carrinho[$iditem]);
        session(['cart' => $carrinho]);
      }

      return redirect()->route('carrinho');
    }

    // FUNÇÃO VER CARRINHO
    public function carrinho(Request $request){
        $carrinho = session('cart', []);

        $data = ['cart' => $carrinho];

        return view('carrinho', $data);
      }

    public function compra_finalizada(Request $request){
        $request->session()->forget('cart');

        return view('compra');
    }
}
