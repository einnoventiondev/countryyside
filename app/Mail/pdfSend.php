<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class pdfSend extends Mailable
{
    use Queueable, SerializesModels;
    public $file;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        
        $this->$file = $file;
        //dd($this->$file);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        //dd($this->file);
        return $this->subject('pdf Updated')
        ->view('modules.mail-view.pdf-mail')
        ->attach('C:\xampp\htdocs\countryyside\public\uploads/1653923492.pdf');
        // return $this->markdown('modules.mail-view.pdf-mail');
    }
}
