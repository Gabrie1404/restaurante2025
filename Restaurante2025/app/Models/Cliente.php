<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nome','endereco','telefone'];

    public function encomendas()
    {
        return $this->hasMany(Encomenda::class);
    }
}
