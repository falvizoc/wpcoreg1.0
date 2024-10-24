@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Alta de Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}

                @include('admin.roles.partials.form')
                
                {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

