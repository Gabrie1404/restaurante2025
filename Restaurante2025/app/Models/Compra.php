<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['ingrediente_id','fornecedor_id','nota_fiscal','quantidade','data_compra','valor_total'];

    public function ingrediente()
    {
        return $this->belongsTo(Ingrediente::class);
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
