<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class QuickEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $request;
    public function __construct(Request $request)
    {
        $this->request  =   $request->all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        dd($this->request['name']);
        return $this->markdown('emails.quick_enquiry');
    }
}
