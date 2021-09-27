<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'preco'];

    function categorias(){
        return $this->belongsToMany(Categoria::class, 'produto_categorias');
    }
}
