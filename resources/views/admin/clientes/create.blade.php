@extends('adminlte::page')

@section('title', 'Alta de Cliente')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-plus"></i> Alta de <b>Cliente</b></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item items-center">
                    <a href="{{route('admin.clientes.index')}}"><i class="fas fa-arrow-left"></i> Listado de Clientes</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-plus"></i> Alta de <b>Cliente</b></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12"> 
            <div class="card card-success card-outline">
                    {!! Form::open(['route' => 'admin.clientes.store', 'autocomplete' => 'off', 'files' => true]) !!}

                        <div class="card-header">
                            <h3 class="card-title">Formulario de Alta</h3>
                        </div>

                        <div class="card-body pb-0">
                            @include('admin.clientes.partials.form', ['disabled' => false])
                        </div>

                        <div class="card-footer">
                            <a type="button" href="{{route('admin.clientes.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                            <button type="submit" class="btn btn-md btn-success float-right btnLoading"><i class="fa fa-check"></i> Confirmar</button>
                        </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
