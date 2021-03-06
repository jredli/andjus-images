<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    public $name;
    public $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg, $name, $email)
    {
        $this->msg = $msg;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('myapP@laravel')
	        ->view('emails.mymail');
    }
}
