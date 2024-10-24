@extends('adminlte::page')

@section('title', 'Alta de Etiqueta')

@section('content_header')
    <h1><i class="fa fa-plus"></i> Alta de <b>Etiqueta</b></h1>
@stop

@section('content')
    <div class="col-md-6"> 
        <div class="card">
                {!! Form::open(['route' => 'admin.etiquetas.store']) !!}
                    <div class="card-body">
                        @include('admin.etiquetas.partials.form')
                    </div>

                    <div class="card-footer">
                        <a type="button" href="{{route('admin.etiquetas.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                        <button type="submit" class="btn btn-md btn-success float-right btnLoading"><i class="fa fa-check"></i> Confirmar</button>
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