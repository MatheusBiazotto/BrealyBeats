<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RmModel extends Model
{
    use HasFactory;

    protected $primary = "id"; //Variavel protegida Key para id de tabelas
    protected $fillable = []; //Lista para organizar consultas ao banco

    public $timeStamps = true; //Ativando o time stamp
    public $incremeting = true; //Ativando o auto increment

    public function beforeSave (){
      return true;
    }

    public function save (array $option = []) {
      try{
        if(!$this->beforeSave()){
          return false;
        }
        return parent::save();
      }
      catch (\Exception $e){
        throw new \Exception ($e->getMessage());
      }
    }
}
