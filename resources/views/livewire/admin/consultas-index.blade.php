<div>
       
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <a wire:click="all" 
                            class="btn btn-app bg-default {{$step === 'all' ? 'text-blue' : ''}}"
                        >
                            <span class="badge bg-danger">{{$consultas_all}}</span>
                            <i class="fas fa-envelope"></i> Todas
                        </a>
                        <a wire:click="not_views" 
                            class="btn btn-app bg-default {{$step === 'not_views' ? 'text-blue' : ''}}"
                        >
                            <span class="badge bg-danger rounded-full">{{$consultas_not_views}}</span>
                            <i class="fas fa-eye-slash"></i> No vistas
                        </a>
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
                            <th class="py-3" style="background: #f2f2f2" colspan="2">Acciones</th>
                            <th class="py-3" style="background: #f2f2f2">Recibida</th>
                            <th class="py-3" style="background: #f2f2f2">Nombre y Apellido</th>
                            <th class="py-3" style="background: #f2f2f2">E-mail</th>
                            <th class="py-3" style="background: #f2f2f2">Modalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($consultas as $consulta)
                            <tr class="cursor-pointer hover @if($consulta->view == 0) text-green-600 font-semibold @endif">
                                <td width="10px" class="px-1 pl-2">
                                    {{-- @can('admin.consultas.destroy') --}}
                                        <form action="{{route('admin.consultas.destroy', $consulta)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                        </form>
                                    {{-- @endcan     --}}
                                </td>
                                <td width="10px" class="px-1">
                                    <a href="{{route('admin.consultas.show', $consulta)}}" class="btn btn-primary btn-sm text-white"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>{{$consulta->created_at->format('d-m-Y')}}</td>
                                <td>{{$consulta->nombre}}, {{$consulta->apellido}}</td>
                                <td>{{$consulta->email}}</td>
                                <td>{{$consulta->modalidad}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    No se encontraron resultados.
                                </td>
                            </tr>
                        @endforelse
                       
                    </tbody>
                </table>
          
            </div>

            @if ($consultas->links())
                <div class="card-footer pb-1">
                    <div class="float-right">
                        {{$consultas->links()}}
                    </div>
                </div>
            @endif

        </div>

</div>
