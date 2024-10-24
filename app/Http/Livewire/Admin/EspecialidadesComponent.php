<?php

namespace App\Http\Livewire\Admin;

use App\Models\Especialidad;
use Livewire\Component;
use Livewire\WithPagination;

class EspecialidadesComponent extends Component
{

    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";
    protected $listeners = ['delete','setCreateColor'];
    public $sort = 'nombre';
    public $direction = 'asc';
    public $createNombre;
    public $editNombre;
    public $createCodigo_color;
    public $editCodigo_color;

    public $validationAttributes = [
        'createNombre' => 'Nombre',
        'editNombre' => 'Nombre',
        'createCodigo_color' => 'Color',
        'editCodigo_color' => 'Color'
    ];

    public function render()
    {

        $especialidades = Especialidad::where(function($query) {
                                $query->where('nombre','LIKE','%'. $this->search. '%');
                            })
                            ->orderBy($this->sort, $this->direction)
                            ->paginate(5);

        return view('livewire.admin.especialidades-component', compact('especialidades'));
    }

    public function updatedSearch(){
        $this->resetPage();
    }

    public function store(){
    
        $rules = [
            'createNombre' => 'required|unique:especialidades,nombre',
            'createCodigo_color' => 'required'
        ];

        $this->validate($rules);

        Especialidad::create([
            'nombre' => $this->createNombre,
            'codigo_color' => $this->createCodigo_color
        ]);

        $this->createNombre = '';
        $this->createCodigo_color = '';

        $this->emit('closeModelAdd');

    }

    public function delete(Especialidad $especialidad){
        $especialidad->delete();
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

    public function setCreateColor($color){
        $this->createCodigo_color = $color;
    }

}
