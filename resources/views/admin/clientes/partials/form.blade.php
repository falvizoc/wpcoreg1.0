{{-- Habilito usar select2 --}}
@section('plugins.Select2', true)

<style>
    .dropdown-menu {
        left: -61px !important;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <div class="row pb-3">
            <div class="col-md-4">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'disabled' => $disabled]) !!}
            
                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese el apellido', 'disabled'  => $disabled]) !!}
            
                @error('apellido')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('numero_de_identificacion', 'Numero de Identificación') !!}
                {!! Form::text('numero_de_identificacion', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese N de identificación', 'maxlength' => 13, 'disabled'  => $disabled]) !!}
            
                @error('numero_de_identificacion')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row pb-3">
            <div class="col-md-4">
                {!! Form::label('direccion', 'Direccion') !!}
                {!! Form::text('direccion', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese la direccion', 'disabled' => $disabled]) !!}
            
                @error('domicilio')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('localidad', 'Localidad') !!}
                {!! Form::text('localidad', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese la localidad', 'disabled'  => $disabled]) !!}
            
                @error('localidad')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('provincia', 'Provincia') !!}
                {!! Form::text('provincia', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese la provincia', 'disabled'  => $disabled]) !!}
            
                @error('provincia')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row pb-3">
            <div class="col-md-4">
                {!! Form::label('email', 'E-mail') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                    </div>
                    {!! Form::text('email', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese el email', 'disabled' => $disabled]) !!}
                </div>
            
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('telefono', 'Telefono') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    {!! Form::text('telefono', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono', 'maxlength' => 12,'disabled'  => $disabled]) !!}
                </div>
            
                @error('telefono')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="col-md-4">
                {!! Form::label('celular', 'Celular') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <a href="@isset($cliente) tel:{{$cliente->celular}} @endisset" class="input-group-text"><i class="fas fa-mobile"></i></a>
                    </div>
                    {!! Form::text('celular', null,  ['class' => 'form-control', 'placeholder' => 'Ingrese el celular', 'maxlength' => 12,'disabled'  => $disabled]) !!}
                    
                    @isset($cliente)
                        @php
                            $caracteres = array(' ', '-','.','+');   
                        @endphp
                        <div class="input-group-prepend">
                            <a href="https://api.whatsapp.com/send?phone=549{{str_replace($caracteres,'',$cliente->celular)}}" class="input-group-text"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    @endisset
            
                @error('celular')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row pb-3">
            <div class="col-md-12">
                {!! Form::label('observaciones', 'Observaciones') !!}
                {!! Form::textarea('observaciones', null, ['class' => 'form-control', 'placeholder' => 'Ingrese alguna observación', 'rows' => 5, 'disabled'  => $disabled]) !!}
            </div>
        </div>
    </div>
    
</div>
