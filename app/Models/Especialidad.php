<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = 'especialidades';

    protected $guarded = ['id','created_at','updated_at'];

    public function expedientes(){
        return $this->hasMany(Expediente::class);
    }
}
