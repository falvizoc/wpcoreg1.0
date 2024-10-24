<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<h2 class="h3">
    Listado de Permisos
</h2>

@foreach ($permisos as $permiso)
    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permiso->id, null, ['class' => 'mr-1']) !!}
            {{$permiso->description}}
        </label>
    </div>

@endforeach