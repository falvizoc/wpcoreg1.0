@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fa fa-list"></i> Listado de <b>Consultas</b></h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert  alert-success">
            {{session('info')}}
        </div>
    @endif
    
    
    @livewire('admin.consultas-index')
@stop
