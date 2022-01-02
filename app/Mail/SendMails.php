<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMails extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$data)
    {
        $this->message = $message;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('layouts.mail')->
            subject("CERTIFICATE")->
            with([
                'title'=>$this->message['title'],
                'body'=>$this->message['body'],
                'certificate'=>$this->data['certificate'],
                'imageUrls'=>$this->data['imageUrls'],
            ]);
    }
}
