<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $contact;
    protected $type;
    public function __construct($contact,$type = null)
    {
        $this->contact = $contact;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => 'no-reply@hanoiforum.vnu.edu.vn', 'name' => 'Hanoi forum 2018'])
            ->subject('Contact us')
            ->view('email.contactUs')->with(['contact' => $this->contact,'type' => $this->type]);
    }
}
