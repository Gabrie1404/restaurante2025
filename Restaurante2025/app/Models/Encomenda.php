<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Encomenda extends Model
{
    use HasFactory;
    protected $fillable = ['cliente_id','data','total'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function pratos()
    {
        // pivot: contem (quantidade, preco_unitario)
        return $this->belongsToMany(Prato::class, 'contem')
                    ->withPivot('quantidade','preco_unitario')
                    ->withTimestamps();
    }
}

