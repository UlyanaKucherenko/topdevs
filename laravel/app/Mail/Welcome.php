<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * ContactUs constructor.
     * @param $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return ContactUs
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS', 'info@topdevs.org'), 'TopDevs Inc.')
            ->subject('Re: Mobile and Web Development Team')
            ->view('mail.welcome', ['data' => $this->data] );
    }
}
