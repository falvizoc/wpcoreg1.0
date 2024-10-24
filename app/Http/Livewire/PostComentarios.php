<?php

namespace App\Http\Livewire;

use App\Models\Comentario;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComentarioPost;
use Illuminate\Support\Facades\Auth;

class PostComentarios extends Component
{
    public $post, $comentarios, $total_registros; 
    public $nombre, $email, $detalle;
    public $sort = 'desc', $limit = 5;
    
    public $rules = [
        'nombre' => 'required|min:4|max:60',
        'email' => 'required|email',
        'detalle' => 'required',
    ];

    public function mount(){
        $this->email = (Auth::check()) ? Auth::user()->email : '';
        $this->total_registros = $this->post->comentarios()->where('tipo',1)->count();
        $this->getComentarios();
    }

    public function store(){
        
        $this->validate();

        $comentario = $this->post->comentarios()->create([
            'tipo' => Comentario::COMENTARIO,
            'comentario_id' => null,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'detalle' => $this->detalle,
        ]);

        if (!Auth::check()) {
            # Envio mail de comentario
            $mail = new ComentarioPost($comentario);

            Mail::to(['walterm_1993@hotmail.com'])
                ->queue($mail);
        }

        # Reseteo campos
        $this->reset(['nombre','email','detalle']);
        $this->emit('saved');

        # Relleno nuevamente campo Email
        $this->email = (Auth::check()) ? Auth::user()->email : '';

        $this->getComentarios();
    }

    public function getComentarios(){
        
        $this->total_registros = $this->post->comentarios()->where('tipo',1)->count();

        $this->comentarios = $this->post->comentarios()
                                        ->where('tipo',1)
                                        ->orderBy('created_at',$this->sort)
                                        ->limit($this->limit)
                                        ->get();
    }

    public function render()
    {
        return view('livewire.post-comentarios');
    }

    public function updatedSort(){
        $this->getComentarios();
    }

    public function delete(Comentario $comentario){
        # Elimino respuestas asociadas
        $comentario->respuestas()->delete();

        # Elimino Comentario
        $comentario->delete();
        $this->getComentarios();
    }

    public function verMasComentarios(){
        $this->limit = $this->limit+5;
        $this->getComentarios();
    }
}
