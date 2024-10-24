<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TareaRequest;
use App\Models\EstadoTarea;
use App\Models\Expediente;
use App\Models\Relevancia;
use App\Models\tarea;
use App\Models\User;

class TareasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.tareas.index')->only('index');
        $this->middleware('can:admin.tareas.create')->only('create','store');
        $this->middleware('can:admin.tareas.edit')->only('edit','update');
        $this->middleware('can:admin.tareas.destroy')->only('destroy');
    }
    
    public function index()
    {
        return view('admin.tareas.index');
    }


    public function create()
    {
        $estados = EstadoTarea::all()->pluck('descripcion','id');
        $relevancias = Relevancia::all()->pluck('descripcion','id');
        $users = User::role(['admin', 'abogado'])->pluck('name','id');
        $expedientes = Expediente::all();

        return view('admin.tareas.create', compact('expedientes', 'users','estados','relevancias'));
    }

    public function store(TareaRequest $request)
    {

        $tarea = Tarea::create([
            'estado_tarea_id' => $request->estado_tarea_id,
            'juzgado' => $request->juzgado,
            'fecha_vencimiento' => $request->fecha_vencimiento,
            'relevancia_id' => $request->relevancia_id,
            'detalle' => $request->detalle,
            'user_id' => auth()->user()->id
        ]);

        $tarea->users()->attach($request['usuarios_responsables']);

        return redirect()->route('admin.tareas.index')->with('info','Tarea agregada exitosamente!');

    }

    public function show(Tarea $tarea)
    {   
        $estados = EstadoTarea::all()->pluck('descripcion','id');
        $relevancias = Relevancia::all()->pluck('descripcion','id');
        $users = User::role(['admin', 'abogado'])->pluck('name','id');
        $expedientes = Expediente::all();

        return view('admin.tareas.show', compact('tarea','expedientes','users','estados','relevancias'));
    }


    public function edit(Tarea $tarea)
    {
        $estados = EstadoTarea::all()->pluck('descripcion','id');
        $relevancias = Relevancia::all()->pluck('descripcion','id');
        $users = User::role(['admin', 'abogado'])->pluck('name','id');
        $expedientes = Expediente::all();

        return view('admin.tareas.edit', compact('tarea','expedientes', 'users','estados','relevancias'));
    }

    public function update(TareaRequest $request, Tarea $tarea)
    {
        
        $tarea->asignada_a_expediente = 0;
        $tarea->expediente_id = $request->expediente_id;
        $tarea->estado_tarea_id = $request->estado_tarea_id;
        $tarea->juzgado = $request->juzgado;
        $tarea->fecha_vencimiento = $request->fecha_vencimiento;
        $tarea->relevancia_id = $request->relevancia_id;
        $tarea->detalle = $request->detalle;
        
        $tarea->save();

        $tarea->users()->sync($request->usuarios_responsables);

        return redirect()->route('admin.tareas.index')->with('info','Tarea editada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('admin.tareas.index')->with('info', 'Tarea eliminada exitosamente!');
    }
}
