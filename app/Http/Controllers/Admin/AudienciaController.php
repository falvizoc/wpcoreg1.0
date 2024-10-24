<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audiencia;
use Illuminate\Http\Request;

class AudienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.audiencias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.audiencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function show(Audiencia $audiencia)
    {
        return view('admin.audiencias.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Audiencia $audiencia)
    {
        return view('admin.audiencias.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audiencia $audiencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audiencia  $audiencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audiencia $audiencia)
    {
        //
    }
}
