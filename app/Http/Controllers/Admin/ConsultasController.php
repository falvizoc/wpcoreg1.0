<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    
    public function index(){
        return view('admin.consultas.index');
    }

    public function show(Consulta $consulta){

        $consulta->view = 1;
        $consulta->save();

        return view('admin.consultas.show', compact('consulta'));
    }

}
