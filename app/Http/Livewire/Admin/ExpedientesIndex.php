<?php

namespace App\Http\Livewire\Admin;

use App\Models\Especialidad;
use Livewire\Component;

class ExpedientesIndex extends Component
{
    public $especialidades, $expedientes;
    public $step = 'carpetas';
    public $total_carpetas = 0;
    public $total_expedientes = 0;

    public function mount(){
        $this->especialidades = Especialidad::all();
    }

    public function render()
    {
        return view('livewire.admin.expedientes-index');
    }
}
