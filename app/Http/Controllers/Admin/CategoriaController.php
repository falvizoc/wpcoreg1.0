<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('can:admin.categorias.index')->only('index');
        $this->middleware('can:admin.categorias.create')->only('create','store');
        $this->middleware('can:admin.categorias.edit')->only('edit','update');
        $this->middleware('can:admin.categorias.destroy')->only('destroy');
    }

    public function index()
    {
        $categorias = Categoria::paginate(5);

        return view('admin.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('admin.categorias.create');
    }

    public function store(Request $request)
    {
        # regla de validacion
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:categorias',
            'codigo_color' => 'required'
        ]);

        $categoria = Categoria::create($request->all());

        return redirect()->route('admin.categorias.edit', $categoria)->with('info','La categoria se registro exitosamente!');
    }

    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        # regla de validacion
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
            'codigo_color' => 'required'
        ]);

        $categoria->update($request->all());

        return redirect()->route('admin.categorias.index')->with('info','La categoria se actualizo exitosamente!');

    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('admin.categorias.index')->with('info','La categoria se ha eliminado exitosamente!');
    }
}
