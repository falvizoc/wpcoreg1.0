<?php

namespace App\Http\Livewire\Admin;

use App\Models\Consulta;
use Livewire\Component;
use Livewire\WithPagination;

class ConsultasIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search, $consultas_not_views = 0, $consultas_all = 0;
    public $view = [0,1];
    public $step = 'all';

    public function render()
    {
        # Total de consultas
        $this->consultas_all = Consulta::all()->count();

        # Total no vistas
        $this->consultas_not_views = Consulta::where('view',0)->count();
        
        $consultas = Consulta::whereIn('view',$this->view)
                            ->where(function($query) {
                                $query->where('email','LIKE','%'. $this->search. '%')
                                    ->orWhere('nombre','LIKE','%'. $this->search. '%')
                                    ->orWhere('apellido','LIKE','%'. $this->search. '%')
                                    ->orWhere('telefono','LIKE','%'. $this->search. '%')
                                    ->orWhere('modalidad','LIKE','%'. $this->search. '%')
                                    ->orWhere('created_at','LIKE','%'. $this->search. '%');
                                    // ->orWhereHas('type_proyect', function (Builder $query) {
                                    //     $query->where('name', 'like', '%'. $this->search. '%');
                                    // })
                            })
                            ->latest()
                            ->paginate(5);

        return view('livewire.admin.consultas-index', compact('consultas'));
    }

    public function all(){
        $this->view = [0,1];
        $this->step = 'all';
    }

    public function not_views(){
        $this->view = [0];
        $this->step = 'not_views';
    }
    
    public function updatedSearch(){
        $this->resetPage();
    }

}
