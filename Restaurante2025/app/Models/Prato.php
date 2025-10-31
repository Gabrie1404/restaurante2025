<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prato extends Model
{
    use HasFactory;
    protected $fillable = ['nome','preco_unitario'];

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'composicoes')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }

    public function encomendas()
    {
        return $this->belongsToMany(Encomenda::class, 'contem')
                    ->withPivot('quantidade','preco_unitario')
                    ->withTimestamps();
    }
}
