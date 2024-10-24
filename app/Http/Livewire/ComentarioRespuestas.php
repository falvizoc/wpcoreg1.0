<?php

namespace App\Http\Livewire;

use App\Mail\ComentarioPost;
use App\Models\Comentario;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\RespuestaComentario;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ComentarioRespuestas extends Component
{
    public $comentario;
    public $respuestas = [];
    public $nombre, $email, $detalle;
    public $agregar_respuesta = false;
    public $view_respuestas = false;
    public $destinatarios = [];

    public $rules = [
        'nombre' => 'required|min:4|max:60',
        'email' => 'required|email',
        'detalle' => 'required',
    ];

    public function mount(){
        $this->email = (Auth::check()) ? Auth::user()->email : '';
    }

    public function store(){
        
        $this->validate();

        $respuesta = $this->comentario->respuestas()->create([
            'tipo' => Comentario::RESPUESTA,
            'comentario_id' => $this->comentario->id,
            'post_id' => $this->comentario->post_id,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'detalle' => $this->detalle,
        ]);

        # Notifico al/los admins
        if (!Auth::check()) {
            # Envio mail del comentario
            $mail = new ComentarioPost($respuesta);

            Mail::to(['walterm_1993@hotmail.com'])
                ->queue($mail);
        }

        # Envio mail de comentario
        $mail = new RespuestaComentario($respuesta);

        // $destinatarios = [];
        $this->armarListaDestinatarios();

        Mail::to($this->destinatarios)
            ->queue($mail);
           
        # Reseteo campos y emito alerta que se envio
        $this->reset(['nombre','email','detalle']);
        $this->emit('saved');

        $this->getRespuestas();
        $this->agregar_respuesta = false;
        $this->view_respuestas = true;

    }

    public function getRespuestas(){
        # Actualizo data del comentario, para que cambie cuantos muestra o oculta
        $this->comentario =  Comentario::find( $this->comentario->id);

        # Actualizo respuestas 
        $this->respuestas = $this->comentario->respuestas()
                                        ->orderBy('created_at','asc')
                                        ->get();
    }

    public function armarListaDestinatarios(){
        
        # Usuario admins
        $users = User::select('email')->role(['Admin','Blogger'])->get();

        /* 
            Armo listado de destinatarios 
            Me traigo todos los mails que respondieron el post inicial
        */
        foreach ($this->respuestas as $key => $respuesta) {
            # Si no existe en el [] lo agrego
            if (!in_array($respuesta->email, $this->destinatarios)) {
                array_push($this->destinatarios, $respuesta->email);
            }

            # Elino el mail del que envia la respuesta, para no notificar su comentario a el mismo
            if ($respuesta->email == $this->email) {
                unset($this->destinatarios[$key]);
            }
        }
        
        # Agrego email del usuario del comentario origen
        array_push($this->destinatarios, $this->comentario->email);

        # Elimino el mail de la lista el que manda la respuesta/comentario
        if(in_array($this->email,$this->destinatarios)){
            unset($this->email);
        }

        # Elimino de esta lista los usuarios admin/blogger
        foreach ($users as $key => $user) {
            if (in_array($user->email, $this->destinatarios)) {
                unset($this->destinatarios[$key]);
            }
        }

    }

    public function render()
    {
        return view('livewire.comentario-respuestas');
    }

    public function delete(Comentario $comentario){
        # Elimino Comentario
        $comentario->delete();
        $this->getRespuestas();
    }

    public function mostrar_respuestas(){
        $this->view_respuestas = !$this->view_respuestas;
        $this->getRespuestas();
    }
}
