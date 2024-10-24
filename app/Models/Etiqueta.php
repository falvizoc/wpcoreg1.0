<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;

    # Habilito la asignacion masiva
    protected $fillable = ['nombre','slug'];

    # Relacion muchos a muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    # URL AMIGABLES - Metodo propio de LARAVEL
    public function getRouteKeyName(){
         return 'slug';
    }
}
