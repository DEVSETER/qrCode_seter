<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AjoutHabilitation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($agent, $habilitation)
    {
        $this->subject("Acquisition Habilitation");
        $this->agent = $agent;
        $this->habilitation = $habilitation;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.acquisition', ['agent' => $this->agent, 'habilitation' => $this->habilitation]);
    }
}
