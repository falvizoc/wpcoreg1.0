@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1><i class="fa fa-edit"></i> Edición de <b>Etiqueta</b></h1>
@stop

@section('content')
    
    @if (session('info'))
        <div class="alert  alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <div class="col-md-6"> 
        <div class="card">
                {!! Form::model($etiqueta, ['route' => ['admin.etiquetas.update', $etiqueta], 'method' => 'put']) !!}
                    <div class="card-body">
                        @include('admin.etiquetas.partials.form')
                    </div>

                    <div class="card-footer">
                        <a type="button" href="{{route('admin.etiquetas.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                        <button type="submit" class="btn btn-md btn-warning float-right"><i class="fa fa-save"></i> Guardar</button>
                    </div>
                {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
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