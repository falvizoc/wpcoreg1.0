<div>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="input-group">
                        <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive pb-0 pt-2">
            <table class="table table-head-fixed table-hover text-nowrap">
                <thead>
                    <tr>
                        <th class="py-3" style="background: #f2f2f2" colspan="3">Acciones</th>
                        <th wire:click="order('nombre')" class="py-3" style="background: #f2f2f2">
                            Nombre
                            @if ($sort == 'nombre')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('apellido')" class="py-3" style="background: #f2f2f2">
                            Apellido
                            @if ($sort == 'apellido')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('numero_de_identificacion')" class="py-3" style="background: #f2f2f2">
                            Identifición
                            @if ($sort == 'numero_de_identificacion')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('direccion')" class="py-3" style="background: #f2f2f2">
                            Direccion
                            @if ($sort == 'direccion')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('email')" class="py-3" style="background: #f2f2f2">
                            Email
                            @if ($sort == 'email')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('telefono')" class="py-3" style="background: #f2f2f2">
                            Telefono
                            @if ($sort == 'telefono')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('celular')" class="py-3" style="background: #f2f2f2">
                            Celular
                            @if ($sort == 'celular')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($clientes as $cliente)
                        <tr class="cursor-pointer hover">
                            <td width="10px" class="px-1 pl-2">
                                <a href="{{route('admin.clientes.show', $cliente)}}" class="btn btn-primary btn-sm text-white"><i class="fa fa-eye"></i></a>
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.clientes.edit')
                                    <a href="{{route('admin.clientes.edit', $cliente)}}" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a>
                                @endcan    
                            </td>
                            <td width="10px" class="px-1">
                                @can('admin.clientes.destroy')
                                    <a wire:click="$emit('deleteCliente', {{$cliente->id}})" class="btn btn-danger btn-sm text-white"><i class="fas fa-trash-alt"></i></a>
                                @endcan    
                            </td>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            <td>{{$cliente->numero_de_identificacion}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->email}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->celular}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">
                                No se encontraron resultados.
                            </td>
                        </tr>
                    @endforelse
                   
                </tbody>
            </table>
          
        </div>
            
        @if ($clientes->links())
            <div class="card-footer pb-1">
                <div class="float-right">
                    {{$clientes->links()}}
                </div>
            </div>
        @endif

    </div>
      
</div>

@section('js')
    <script>
        Livewire.on('deleteCliente', clienteId => {
            Swal.fire({
                title: 'Seguro que desea eliminar el registro',
                text: "Seguro que desea eliminar el registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6e7881',
                confirmButtonText: 'Si, eliminar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.clientes-index', 'delete', clienteId);
                    Swal.fire(
                        'Registro Eliminado!',
                        'Registro eliminado exitosamente.',
                        'success'
                    )
                }
            })
        })
    </script>
@stop