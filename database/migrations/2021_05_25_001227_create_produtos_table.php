<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nome", 50);
            $table->string("artista", 50);
            $table->string("duracao", 10);
            $table->decimal("preco", 7,2);
            $table->string("audio", 50);
            $table->integer("id_categoria")->unsigned();

            $table->foreign("id_categoria")
                ->references("id")
                ->on("categorias")
                ->onDelete("cascade");
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
