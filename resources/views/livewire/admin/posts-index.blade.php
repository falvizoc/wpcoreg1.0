<div>
    <div class="card">

        <div class="card-header">
            <div class="col-md-6  float-right d-flex align-items-center">
                <div class="input-group">
                    <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body table-responsive pb-0 pt-2">
            <table class="table table-head-fixed table-hover text-nowrap">
                <thead>
                    <tr>
                        <th class="py-3" style="background: #f2f2f2" colspan="3">
                            Acciones
                        </th>
                        <th wire:click="order('categoria_id')" class="py-3" style="background: #f2f2f2">
                            Categoria
                            @if ($sort == 'categoria_id')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th wire:click="order('titulo')" class="py-3" style="background: #f2f2f2">
                            Nombre
                            @if ($sort == 'titulo')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th wire:click="order('visits')" class="py-3" style="background: #f2f2f2">
                            Visitas
                            @if ($sort == 'visits')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-amount-up-alt float-right cursor-pointer mt-1"></i>
                                @else
                                    <i class="fas fa-sort-amount-down-alt float-right cursor-pointer mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right cursor-pointer mt-1"></i>
                            @endif
                        </th>
                        <th  wire:click="order('created_at')" class="py-3" style="background: #f2f2f2">
                            Fecha
                            @if ($sort == 'created_at')
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
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            <tr>
                                <td width="10px" class="px-1 pl-2">
                                    @can('admin.posts.edit')
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.posts.show', $post)}}"><i class="fa fa-eye"></i></a>
                                    @endcan    
                                </td>
                                <td width="10px" class="px-1">
                                    @can('admin.posts.edit')
                                        <a class="btn btn-warning btn-sm text-white" href="{{route('admin.posts.edit', $post)}}"><i class="fa fa-edit"></i></a>
                                    @endcan    
                                </td>
                                <td width="10px" class="px-1">
                                    @can('admin.posts.destroy')
                                        <a wire:click="$emit('deletePost', '{{$post->slug}}')" class="btn btn-danger btn-sm text-white"><i class="fas fa-trash-alt"></i></a>
                                    @endcan   
                                </td>
                                <td>{{$post->categoria->nombre}}</td>
                                <td>{{$post->titulo}}</td>
                                <td>{{$post->visits}} visitas</td>
                                <td>{{date_format($post->created_at,'d-m-Y')}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No se encontraron resultados..</td>
                        </tr>
                    @endif
                
                </tbody>
            </table>
        </div>

        @if ($posts->links())
            <div class="card-footer pb-1">
                <div class="float-right">
                    {{$posts->links()}}
                </div>
            </div>
        @endif

    </div>
</div>

@section('js')
    <script>
        Livewire.on('deletePost', postSlug => {
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
                    Livewire.emitTo('admin.posts-index', 'delete', postSlug);
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