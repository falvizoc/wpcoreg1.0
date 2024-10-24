<?php

namespace App\Mail;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RespuestaComentario extends Mailable
{
    use Queueable, SerializesModels;

    public $post, $comentario, $respuesta;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comentario $respuesta)
    {   
        # Comentario relacionado a la respuesta
        $this->comentario = Comentario::find($respuesta->comentario_id);
        
        # Respuesta
        $this->respuesta = $respuesta;

        # Post
        $this->post = Post::find($respuesta->post_id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->respuesta->email, $this->respuesta->name)->view('mail.respuesta-comentario')->subject('🔔 Nueva respuesta al comentario');
    }
}
