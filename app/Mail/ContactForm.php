<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $email;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$msg,$phone)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->msg=$msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactForm');
        return;
    }
}