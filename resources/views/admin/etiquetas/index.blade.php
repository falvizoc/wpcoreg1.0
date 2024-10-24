@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.etiquetas.create')
        <a class="btn btn-sm btn-success float-right" href="{{route('admin.etiquetas.create')}}"><i class="fa fa-plus"></i> Agregar</a>
    @endcan

    <h1><i class="fa fa-list"></i> Listado de <b>Etiquetas</b></h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert  alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($etiquetas as $etiqueta)
                        <tr>
                            <td>{{$etiqueta->nombre}}</td>
                            <td width="10px" class="px-1">
                                @can('admin.etiquetas.show')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.etiquetas.show', $etiqueta)}}"><i class="fa fa-eye"></i></a>
                                @endcan    
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.etiquetas.edit')
                                    <a class="btn btn-warning btn-sm text-white" href="{{route('admin.etiquetas.edit', $etiqueta)}}"><i class="fa fa-edit"></i></a>
                                @endcan    
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.etiquetas.destroy')
                                    <form action="{{route('admin.etiquetas.destroy', $etiqueta)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                @endcan    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
