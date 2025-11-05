<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Relatorios extends Model
{
    public function ListItems()
    {
        $ListaProdutosDoBanco = DB::select('select * from compras order by id_compra ASC');
        return $ListaProdutosDoBanco;
    }
}
?>