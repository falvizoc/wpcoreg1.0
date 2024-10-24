<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Categoria;
use App\Models\Etiqueta;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create','store');
        $this->middleware('can:admin.posts.edit')->only('edit','update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');
    }

    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*
            PLUCK me permite mostrarlo asi, en vez de mostrar un array con todas las columnas
            de la tabla categorias. En este casi debo mostrarlo asi como figura abajo
            ya que asi laravel colective lo entiende
            {
                "1": "omnis",
                "2": "pariatur",
                "3": "deserunt",
                "4": "eligendi"
            }
        */

        $categorias = Categoria::pluck('nombre','id');
        $etiquetas = Etiqueta::all();

        return view('admin.posts.create', compact('categorias','etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $post = Post::create($request->all());

        if ($request->file('file')) {
            $url_imagen = Storage::put('public/posts', $request->file('file'));
            $post->image()->create([
                'url' => $url_imagen
            ]);
        }

        if ($request->etiquetas) {
            $post->etiquetas()->attach($request->etiquetas);
        }

        # Eliminar el cache para actualizacion 
        Cache::flush();

        return redirect()->route('admin.posts.edit', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $categorias = Categoria::pluck('nombre','id');
        $etiquetas = Etiqueta::all();

        return view('admin.posts.show', compact('post','categorias','etiquetas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        // Policies para validar si posee permiso de edicion
        // $this->authorize('author', $post);

        $categorias = Categoria::pluck('nombre','id');
        $etiquetas = Etiqueta::all();

        return view('admin.posts.edit', compact('post','categorias','etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->all());

        if ($request->file('file')) {
            $url_imagen = Storage::put('public/posts', $request->file('file'));
            
            // si ya tenia imagen la elimino
            if ($post->image) {
                Storage::delete($post->image->url);

                $post->image->update([
                    'url' => $url_imagen
                ]);
            }else{
                $post->image()->update([
                    'url' => $url_imagen
                ]);
            }

        }

        if ($request->etiquetas) {
            $post->etiquetas()->sync($request->etiquetas);
        }

        # Eliminar el cache para actualizacion 
        Cache::flush();

        return redirect()->route('admin.posts.edit', $post)->with('info', 'Post actualizado exitosamente!');
    }
    
}
