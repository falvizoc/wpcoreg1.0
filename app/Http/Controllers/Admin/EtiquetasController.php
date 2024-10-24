<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etiqueta;

class EtiquetasController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.etiquetas.index')->only('index');
        $this->middleware('can:admin.etiquetas.create')->only('create','store');
        $this->middleware('can:admin.etiquetas.edit')->only('edit','update');
        $this->middleware('can:admin.etiquetas.destroy')->only('destroy');
    }

    public function index()
    {
        $etiquetas = Etiqueta::all();

        return view('admin.etiquetas.index', compact('etiquetas'));
    }

    public function create()
    {
        return view('admin.etiquetas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug'  => 'required|unique:etiquetas',
        ]);

        $etiqueta = Etiqueta::create($request->all());

        return redirect()->route('admin.etiquetas.edit', compact('etiqueta'))->with('info','La etiqueta se creo exitosamente!');
    }

    public function show(Etiqueta $etiqueta)
    {
        return view('admin.etiquetas.show', compact('etiqueta'));
    }

    public function edit(Etiqueta $etiqueta)
    {
        return view('admin.etiquetas.edit', compact('etiqueta'));
    }

    public function update(Request $request, Etiqueta $etiqueta)
    {
        $request->validate([
            'nombre' => 'required',
            'slug'  => "required|unique:etiquetas,slug,$etiqueta->id",
        ]);

        $etiqueta->update($request->all());

        return redirect()->route('admin.etiquetas.index')->with('info','Etiqueta actualizada exitosamente!');
    }

    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return redirect()->route('admin.etiquetas.index')->with('info','Etiqueta eliminada exitosamente!');
    }
}
