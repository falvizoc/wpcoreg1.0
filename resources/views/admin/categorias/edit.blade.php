@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.BootstrapColorpicker',true)

@section('content_header')
    <h1><i class="fa fa-pencil"></i> Edición de <b>Categoria</b></h1>    
@stop

@section('content')
    
    @if (session('info'))
        <div class="alert  alert-success">
           {{session('info')}}
        </div>
    @endif
    
    <div class="col-md-6">
        <div class="card">
                {!! Form::model($categoria, ['route' => ['admin.categorias.update', $categoria],'method' => 'put']) !!}
                <div class="card-body">
                        
                    <div class="form-group">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}
                            
                            @error('nombre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('slug', 'Slug') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}
                            
                            @error('slug')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            {!! Form::label('codigo_color', 'Color') !!}
                            <x-adminlte-input-color name="codigo_color" id="codigo_color" data-color="{{(isset($categoria->codigo_color)) ? $categoria->codigo_color : ''}}" data-format='hex'
                                data-horizontal=true value="{{(isset($categoria->codigo_color)) ? $categoria->codigo_color : ''}}">
                                <x-slot name="appendSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-lg fa-square"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input-color>
                            
                        </div>
                    </div>

                    <div class="card-footer">
                        <a type="button" href="{{route('admin.categorias.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                        <button type="submit" class="btn btn-md btn-warning float-right"><i class="fa fa-save"></i> Guardar</button>
                    </div>
                {!! Form::close() !!}
        </div>
    </div>

@stop

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
        $("#nombre").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });
    </script>
@endsection