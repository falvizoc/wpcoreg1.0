<?php

namespace App\Mail;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ComentarioPost extends Mailable
{
    use Queueable, SerializesModels;

    public $post, $comentario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comentario $comentario)
    {
        $this->comentario = $comentario;
        $this->post = Post::find($comentario->post_id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->comentario->email, $this->comentario->name)->view('mail.comentario-post')->subject('🔔 ¡Nuevo comentario en tu blog!');
    }
}
