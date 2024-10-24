@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="far fa-envelope"></i> Visualización de <b>Consulta</b></h1>
@stop

@section('content')

<div class="card card-danger card-outline">
    <div class="card-header">
        <h3 class="card-title">Consulta en Formulario Web</h3>
        <div class="card-tools">
           
        </div>
    </div>
    
    <div class="card-body px-2 pt-0">
        <div class="mailbox-read-info">
            <h5 class="pb-2"><b>{{$consulta->nombre}}, {{$consulta->apellido}}</b></h5>
            <h6>E-mail: <a href="">{{$consulta->email}}</a>
            <h6>Telefono: <a href="">{{$consulta->telefono}}</a>
            <h6>Modalidad de preferencia: <b>{{$consulta->modalidad}}</b>

            <span class="mailbox-read-time float-right">{{date_format($consulta->created_at, 'd-m-Y h:i')}}</span></h6>
        </div>
    
    <div class="mailbox-controls with-border text-center">
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm" data-container="body" title="Delete">
                <i class="far fa-trash-alt"></i>
            </button>
        </div>
    
        <button type="button" class="btn btn-default btn-sm" title="Print">
            <i class="fas fa-print"></i>
        </button>
    </div>
    
    <div class="mailbox-read-message">
        {{$consulta->detalle}}
    </div>
    
    </div>
    
    <div class="card-footer">
        <div class="float-right">
            <a href="{{route('admin.consultas.index')}}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Volver al listado</a>
        </div>
        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar</button>
        <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Imprimir</button>
    </div>
    
    </div>

@stop