<?php

namespace App\Mail;

use App\Reporte;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailReporte extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $reporte;

    public function __construct(Reporte $reporte)
    {
        $this->reporte = $reporte;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Nuevo Ticket Creado')
            ->markdown('emails.reporte');
    }
}
