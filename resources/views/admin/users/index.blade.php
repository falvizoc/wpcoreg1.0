@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a class="btn btn-success btn-sm float-right" href="{{route('admin.users.prueba')}}">Crear archivo PHP</a>

    <h1>Listado de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop