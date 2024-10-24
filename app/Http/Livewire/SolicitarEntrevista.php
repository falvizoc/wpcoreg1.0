<?php

namespace App\Http\Livewire;

use App\Models\Consulta;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendConsultation;

class SolicitarEntrevista extends Component
{

    public $nombre, $apellido, $telefono, $email, $consulta, $url;

    public $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'telefono' => 'required',
        'email' => 'required|email',
        'consulta' => 'required',
    ];

    public function render()
    {
        return view('livewire.solicitar-entrevista');
    }

    public function solicitar(){
        
        $this->validate();

        // Crear un arreglo con los datos del formulario
        $consulta = [
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'telefono' => $this->telefono,
            'email' => $this->email,
            'detalle' => $this->consulta,
        ];

        # Notifico via mail a mi casilla
        $mail = new SendConsultation($consulta);
         
        // Mail::to('inktineranteargentina@gmail.com')->queue($mail);
        Mail::to('licenciadowalterramos@gmail.com')->send($mail);

        $mensaje = "Mensaje enviado exitosamente! Nos contactaremos a la brevedad con usted, muchas gracias por interesarse en Coreg.";
		session()->flash('flash.banner', $mensaje);
        
        return redirect()->route('home.index');
    }

}
