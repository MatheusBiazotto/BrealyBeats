<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Categorias;
use App\Models\Produto;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new Categorias(['categoria' => 'Rap']);

        $cat2 = new Categorias(['categoria' => 'Trap']);

        $cat3 = new Categorias(['categoria' => 'Lofi']);

        // EXEMPLO DE INSERÇÃO DE DADO NA TABELA PRODUTO
        /*$p1 = new Produto([
            'nome' => 'For the Stars',
            'artista' => 'Brealy Beats',
            'duracao' => '02:13',
            'preco' => 320,
            'audio' => '',
            'id_categoria' => $cat3 -> id
        ]);*/

        // $p7->save();

        $p10 = new Produto([
            'nome' => 'sCt60',
            'artista' => 'Brealy Beats',
            'duracao' => '02:32',
            'preco' => 540,
            'audio' => 'sct60_brealy.mp3',
            'id_categoria' => $cat2 -> id]);

        $p10->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
