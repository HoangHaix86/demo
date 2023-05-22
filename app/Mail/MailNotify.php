<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->subject = "Thong bao";
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from('kensuyu1@gmail.com')
        //    ->view('mails.mail-notify')
        //    ->subject('Notification email');
        // return $this->subject($this->subject)->replyTo('kensuyu1@gmail.com','Kensuyu')->view('mails.mail-notify',['data'=> $this->data]);
    }
}
