<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Pratos extends Model
{
    public function GetPrato($IDItem)
    {
        return "Item encontrado";
    }

    public function InsertItems($ItemName, $ItemPrice)
    {
        DB::insert('insert into prato (nome, preco) values (?, ?)', [$ItemName, $ItemPrice]);
    }

    public function ListItems()
    {
        $ListaProdutosDoBanco = DB::select('select * from prato order by id_prato ASC');
        return $ListaProdutosDoBanco;
    }
}
?>