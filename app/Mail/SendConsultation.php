<?php

namespace App\Mail;

use App\Models\Consulta;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendConsultation extends Mailable
{
    use SerializesModels;
    public $consulta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $consulta)
    {
        $this->consulta = $consulta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.consulta')->subject('🔔 Has recibido una nueva consulta!');
    }
}
