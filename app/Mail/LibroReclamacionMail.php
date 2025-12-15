<?php

namespace App\Mail;

use App\Models\FormularioLibroReclamacion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LibroReclamacionMail extends Mailable
{
    use Queueable, SerializesModels;

    public FormularioLibroReclamacion $formulario;

    public function __construct(FormularioLibroReclamacion $formulario)
    {
        $this->formulario = $formulario;
    }

    public function build()
    {
        return $this
            ->subject('Nuevo Reclamo / Queja - Libro de Reclamaciones')
            ->view('emails.libro-reclamacion');
    }
}
