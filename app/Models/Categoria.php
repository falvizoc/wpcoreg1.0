<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    # habilitar asignacion masiva
    protected $fillable = ['nombre', 'slug', 'codigo_color'];

    # Relacion 1 a muchos
    public function posts(){
        return $this->hasMany(Post::class);
    }

    # URL AMIGABLES - Metodo propio de LARAVEL
    public function getRouteKeyName(){
        return 'slug';
    }
}
