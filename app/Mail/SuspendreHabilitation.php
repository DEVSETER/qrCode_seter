<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuspendreHabilitation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($agent, $habilitation, $action)
    {
        $this->subject("Suspension d'habilitation");
        $this->agent = $agent;
        $this->habilitation = $habilitation;
        $this->action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.suspendre', ['agent' => $this->agent, 'habilitation' => $this->habilitation, 'action' => $this->action]);
    }
}
