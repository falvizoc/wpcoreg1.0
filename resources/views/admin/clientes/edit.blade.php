@extends('adminlte::page')

@section('title', 'Edición de Cliente')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-edit"></i> Edición de <b>Cliente</b></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item items-center">
                    <a href="{{route('admin.clientes.index')}}"><i class="fas fa-arrow-left"></i> Listado de Clientes</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-edit"></i> Edición de <b>Cliente</b></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12"> 
            <div class="card card-warning card-outline">
                    {!! Form::model($cliente, ['route' => ['admin.clientes.update', $cliente], 'method' => 'put']) !!}

                        <div class="card-header">
                            <h3 class="card-title">Formulario de Edición</h3>
                        </div>

                        <div class="card-body pb-0">
                            @include('admin.clientes.partials.form', ['disabled' => false])
                        </div>

                        <div class="card-footer">
                            <a type="button" href="{{route('admin.clientes.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                            <button type="submit" class="btn btn-md btn-warning float-right"><i class="fa fa-save"></i> Guardar</button>
                        </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
