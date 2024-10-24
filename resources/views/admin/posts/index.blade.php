@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
    @can('admin.posts.create')
        <a class="btn btn-sm btn-success float-right" href="{{route('admin.posts.create')}}"><i class="fa fa-plus"></i> Nuevo Post</a>
    @endcan

    <h1><i class="fa fa-list"></i> Listado de <b>Posts</b></h1>
@stop

@section('plugins.Sweetalert2', true)

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-12">
            @livewire('admin.posts-index')
        </div>
    </div>

@stop
