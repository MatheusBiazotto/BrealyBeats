<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends RmModel
{
    protected $table = "produtos";
    protected $fillable = ['id', 'nome', 'artista', 'duracao', 'preco', 'audio', 'id_categoria'];
}
