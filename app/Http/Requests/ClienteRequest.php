<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

        $cliente = $this->route()->parameter('cliente');

        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'numero_de_identificacion' => 'required|unique:clientes',
            'direccion' => 'required',
            'celular' => 'required'
        ];

        if ($cliente) {
            $rules['numero_de_identificacion'] = 'required|unique:clientes,numero_de_identificacion,'.$cliente->id;
        }
        
        return $rules;
    }

    public function attributes()
    {
        return [
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'numero_de_identificacion' => 'Numero de Identificación',
            'direccion' => 'Direccion',
            'celular' => 'Celular',
        ];
    }
}
