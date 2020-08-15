<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPostMail extends Mailable
{
    use Queueable, SerializesModels;
    
   
    /**
     * Create a new message instance.
     *
     * @return void
     */ 
    public $post;
    public $url;
    public $email;
 
 


    public function __construct($post,$email)
    {
        $this->post = $post;
        $this->email = $email;
         $this->url = url('post/' . $this->post->id . '-' . $this->post->slug);  
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->markdown('mail.newpostemail');
    }
}
