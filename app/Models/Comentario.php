<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $guarded = ['id','comentario_id','created_at','updated_at'];

    const COMENTARIO = 1;
    const RESPUESTA = 2;

    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }

    public function getDetalleAttribute($value)
    {
        return ucfirst($value);
    }

    # Relacion reciproca
    public function respuestas(){
        return $this->hasMany(Comentario::class, 'comentario_id');
    }

    # Relacion 1 a muchos inversa
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
