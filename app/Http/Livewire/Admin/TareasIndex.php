<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TareasIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    
    public $search, $tareas_mias = 0;
    public $view = [0,1];
    public $step = 'mis_tareas';
    protected $listeners = ['delete'];
    public $sort = 'created_at';
    public $direction = 'asc';

    public function render()
    {

         # Total asignadas a mi
         $this->tareas_mias = Tarea::whereHas('users', function (Builder $query) {
                                        $query->where('user_id', Auth()->user()->id);
                                    })
                                    ->count();
         
         $tareas = Tarea::with(['estado_tarea','relevancia'])
                          ->where(function($query) {
                                 $query->Where('juzgado','LIKE','%'. $this->search. '%')
                                     ->orWhere('detalle','LIKE','%'. $this->search. '%')
                                     ->orWhere('created_at','LIKE','%'. date('Y-m-d', strtotime($this->search)). '%')
                                     ->orWhere('fecha_vencimiento','LIKE','%'. date('Y-m-d', strtotime($this->search)). '%')
                                     ->orWhereHas('estado_tarea', function (Builder $query) {
                                         $query->where('descripcion', 'like', '%'. $this->search. '%');
                                     })
                                     ->orWhereHas('relevancia', function (Builder $query) {
                                        $query->where('descripcion', 'like', '%'. $this->search. '%');
                                     });
                          
                             })
                             ->whereHas('users', function (Builder $query) {
                                if($this->step!='all'){
                                    $query->where('user_id', Auth()->user()->id);
                                }
                             })
                            ->orderBy($this->sort, $this->direction)
                             ->paginate(5);

        return view('livewire.admin.tareas-index', compact('tareas'));
    }

    public function view_all(){
        $this->view = [0,1];
        $this->step = 'all';
    }

    public function view_mis_tareas(){
        $this->view = [0];
        $this->step = 'mis_tareas';
    }
    
    public function updatedSearch(){
        $this->resetPage();
    }

    public function delete(Tarea $tarea){
        $tarea->delete();
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
