<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RespondedToComment extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->from('bethsalvatore.webdev@gmail.com')
            ->view('messages.respond')
              with([
                'email' => $this-> message -> email,
                'name' => $this -> message -> name,
                'username' => $this -> message -> username,
                'orginalMessage' => $this -> message -> message,
                'messageDate' => $this -> message -> created_at
              ]);
    }
}
