<?php

namespace App\Mail;

use App\Models\ComprobantePago;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EvidenciaPagoObservacionMail extends Mailable
{
    use Queueable, SerializesModels;

    use Queueable, SerializesModels;

    public $comprobante;

    public function __construct(ComprobantePago $comprobante)
    {
        $this->comprobante = $comprobante;
    }

    public function build()
    {
        return $this->subject('Observación de evidencia de imagen')
            ->view('emails.evidencia-pago-observacion');
    }
}
