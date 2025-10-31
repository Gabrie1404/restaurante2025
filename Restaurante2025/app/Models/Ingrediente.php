<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ingrediente extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    public function pratos()
    {
        return $this->belongsToMany(Prato::class, 'composicoes')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }

    public function compras()
    {
        return $this->hasMany(Compra::class);
    }
}
