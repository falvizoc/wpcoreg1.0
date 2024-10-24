@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Summernote', true)

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-plus"></i> Alta de <b>Post</b></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item items-center">
                    <a href="{{route('admin.posts.index')}}"><i class="fas fa-arrow-left"></i> Listado de Posts</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-plus"></i> Alta de <b>Post</b></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="card">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}
                <div class="card-body">
                    @include('admin.posts.partials.form', ['disabled' => false])
                </div>
                
                <div class="card-footer">
                    <a type="button" href="{{route('admin.posts.index')}}" class="btn btn-md btn-default"><i class="fa fa-times"></i> Cancelar</a>
                    <button type="submit" class="btn btn-md btn-success float-right btnLoading"><i class="fa fa-check"></i> Confirmar</button>
                </div>
            {!! Form::close() !!}
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop


@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
        $("#titulo").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
        });

        // Cambiar Imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("imagen").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection