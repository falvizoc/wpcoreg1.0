<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    
    # Relacion 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    # Relacion muchos a muchos
    public function etiquetas(){
        return $this->belongsToMany(Etiqueta::class);
    }

    # Relacion 1 a 1 polimorfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

     # URL AMIGABLES - Metodo propio de LARAVEL
    public function getRouteKeyName(){
        return 'slug';
    }

    # Relacion 1 a muchos
    public function comentarios(){
        return $this->hasMany(Comentario::class);
    }
    
}
