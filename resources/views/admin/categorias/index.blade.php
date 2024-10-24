@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    @can('admin.categorias.create')
        <a class="btn btn-sm btn-success float-right" href="{{route('admin.categorias.create')}}"><i class="fa fa-plus"></i> Agregar</a>
    @endcan

    <h1><i class="fa fa-list"></i> Listado de <b>Categorias</b></h1>
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
                        <th>Color</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->nombre}}</td>
                            <td>
                                <div style="background: {{$categoria->codigo_color}};width:40px" class="img-circle text-white color-palette py-1 rounded-full text-center shadow-lg">
                                    <span>
                                        <i class="fa fa-eye-dropper"></i>
                                    </span>
                                </div>
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.categorias.edit')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.categorias.show', $categoria)}}"><i class="fa fa-eye"></i></a>
                                @endcan    
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.categorias.edit')
                                    <a class="btn btn-warning btn-sm text-white" href="{{route('admin.categorias.edit', $categoria)}}"><i class="fa fa-edit"></i></a>
                                @endcan    
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.categorias.destroy')
                                    <form action="{{route('admin.categorias.destroy', $categoria)}}" method="POST">
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

        {{-- Paginacion --}}
        {{-- <div class="card-footer">
            {{$categorias->links()}}
        </div> --}}
    </div>
@stop
