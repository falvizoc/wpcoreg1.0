<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function estado_tarea(){
        return $this->belongsTo(EstadoTarea::class);
    }

    public function relevancia(){
        return $this->belongsTo(Relevancia::class);
    }

    public function users(){
        return $this->belongsToMany(user::class);
    }

}
