<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class ClientesIndex extends Component
{

    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";
    protected $listeners = ['delete'];
    public $sort = 'nombre';
    public $direction = 'asc';

    public function render()
    {

        $clientes = Cliente::where(function($query) {
                                $query->where('nombre','LIKE','%'. $this->search. '%')
                                    ->orWhere('apellido','LIKE','%'. $this->search. '%')
                                    ->orWhere('numero_de_identificacion','LIKE','%'. $this->search. '%')
                                    ->orWhere('direccion','LIKE','%'. $this->search. '%')
                                    ->orWhere('email','LIKE','%'. $this->search. '%')
                                    ->orWhere('telefono','LIKE','%'. $this->search. '%')
                                    ->orWhere('celular','LIKE','%'. $this->search. '%')
                                    ->orWhere('observaciones','LIKE','%'. $this->search. '%');
                            })
                            ->orderBy($this->sort, $this->direction)
                            ->paginate(5);

        return view('livewire.admin.clientes-index', compact('clientes'));
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function delete(Cliente $cliente){
        $cliente->delete();
    }

    public function order($sort)
    {
        # Doble clic en ordenar la columna entra an IF
        if($this->sort == $sort){
            # Si hice doble y era asc paso a desc, sino a asc
            if($this->direction == 'asc'){
                $this->direction = 'desc';
            }else{
                $this->direction = 'asc';
            }
        }else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
}
