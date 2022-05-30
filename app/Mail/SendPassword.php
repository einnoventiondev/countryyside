<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $generate_password;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($generate_password)
    {
        //return $generate_password;
        $this->generate_password = $generate_password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Vocation')
        ->view('modules.password-mail-view.password-mail-view');
    }
}
