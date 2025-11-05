<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    public function GetProduto($IDItem)
    {
        return "Item encontrado";
    }

    public function InsertItems($ItemName, $ItemQuantity, $ItemPrice)
    {
        DB::insert('insert into ingrediente (nome, quantidade, preco) values (?, ?, ?)', [$ItemName, $ItemQuantity, $ItemPrice]);
    }

    public function ListItems()
    {
        $ListaProdutosDoBanco = DB::select('select * from ingrediente order by id_ingrediente ASC');
        return $ListaProdutosDoBanco;
    }
}
?>