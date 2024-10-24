@extends('adminlte::page')

@section('title', 'Visualización de Cliente')

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-eye"></i> Visualización de <b>Cliente</b></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item items-center">
                    <a href="{{route('admin.clientes.index')}}"><i class="fas fa-arrow-left"></i> Listado de Clientes</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-eye"></i> Visualización de <b>Cliente</b></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="col-md-12"> 
        <div class="card card-primary card-outline">
                {!! Form::model($cliente, ['route' => ['admin.clientes.show', $cliente], 'method' => 'get']) !!}

                    <div class="card-header">
                        <h3 class="card-title">Formulario de Visualización</h3>
                    </div>

                    <div class="card-body pb-0">
                        @include('admin.clientes.partials.form', ['disabled' => true])
                    </div>

                    <div class="card-footer px-10">
                        <a type="button" href="{{route('admin.clientes.index')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-arrow-left"></i> Volver al listado</a>
                        <a type="button" href="{{route('admin.clientes.edit', $cliente)}}" class="btn btn-md btn-warning float-right mr-2"><i class="fa fa-edit"></i> Editar</a>
                    </div>
                {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
