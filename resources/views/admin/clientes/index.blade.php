@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.tareas.create')
     <a class="btn btn-sm btn-success float-right" href="{{route('admin.clientes.create')}}"><i class="fas fa-plus"></i> Nuevo Cliente</a>
    @endcan

    <h1><i class="fas fa-id-card"></i> Listado de <b>Clientes</b></h1>
@stop

@section('plugins.Sweetalert2', true)

@section('content')

    @if (session('info'))
        <div class="alert  alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-12">
            @livewire('admin.clientes-index')
        </div>
    </div>
    
@stop


