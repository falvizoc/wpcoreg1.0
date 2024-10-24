@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Summernote', true)

@section('content_header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-plus"></i> Visualización de <b>Post</b></h1>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item items-center">
                    <a href="{{route('admin.posts.index')}}"><i class="fas fa-arrow-left"></i> Listado de Posts</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-plus"></i> Visualización de <b>Post</b></li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')

    @if (session('info'))
        <div class="alert  alert-success">
            {{session('info')}}
        </div>
    @endif

    <div class="card">
            {!! Form::model($post, ['route' => ['admin.posts.show', $post], 'autocomplete' => 'off', 'files' => true, 'method' => 'get']) !!}
                <div class="card-body">
                    @include('admin.posts.partials.form', ['disabled' => true])
                </div>

                <div class="card-footer">
                    <a type="button" href="{{route('admin.posts.index')}}" class="btn btn-md btn-primary float-right"><i class="fa fa-arrow-left"></i> Volver al Listado</a>
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
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script> --}}

    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>
        <!-- include summernote css/js -->

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