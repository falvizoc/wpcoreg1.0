<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'estado_tarea_id' => 'required',
            'juzgado' => 'required',
            'fecha_vencimiento' => 'required',
            'relevancia_id' => 'required',
            'detalle' => 'required',
            'usuarios_responsables' => 'required'
        ];

        if($this->asignada_a_expediente == 1){
            $rules = array_merge($rules, [
                'expediente_id' => 'required',
            ]);
        }
        return $rules;
    }

    public function attributes()
    {
        return [
            'estado_tarea_id' => 'Estado',
            'expediente_id' => 'Expediente',
            'juzgado' => 'Juzgado',
            'fecha_vencimiento' => 'Fecha Vencimiento',
            'relevancia_id' => 'Relevancia',
            'usuarios_responsables' => 'Usuarios Responsables',
            'detalle' => 'Detalle',
        ];
    }
}
