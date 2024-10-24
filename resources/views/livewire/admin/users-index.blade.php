<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    Prueba de tecto
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" type="text" placeholder="Ingrese nombre o correo de un usuario..">
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="10px">
                                <a class="btn btn-warning" href="{{route('admin.users.edit', $user)}}"> Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                No se encontraron resultados..
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>

        {{-- Paginacion --}}
        <div class="card-footer">
            {{$users->links()}}
        </div>
    </div>
</div>
