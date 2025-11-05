<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    public function GetPrato($IDItem)
    {
        return "Item encontrado";
    }

    public function InsertItems($ItemDate, $ItemPrice)
    {
        DB::insert('insert into pedido (data, valor) values (?, ?)', [$ItemDate, $ItemPrice]);
    }

    public function ListItems()
    {
        $ListaProdutosDoBanco = DB::select('select * from pedido order by id_pedido ASC');
        return $ListaProdutosDoBanco;
    }
}
?>