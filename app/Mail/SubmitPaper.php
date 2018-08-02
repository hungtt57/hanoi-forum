<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubmitPaper extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => 'no-reply@hanoiforum.vnu.edu.vn', 'name' => 'Hanoi forum 2018'])
            ->subject('Confirmation of Paper Submission')
            ->view('email.submitPaper')->with(['user' => $this->user]);
    }
}
