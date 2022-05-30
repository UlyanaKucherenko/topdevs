<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Resume extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * ContactUs constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return Resume
     */
    public function build(): Resume
    {
        if (isset($this->data['attachment'])) {
            if (is_array($this->data['attachment'])) {
                $mail = $this->from($this->data['email'])
                    ->view('mail.resume', [
                        "data" => $this->data
                    ]);
                foreach ($this->data['attachment'] as $attachment) {
                    $mail->
                    attach($attachment, [
                        'as' => $attachment->getClientOriginalName(),
                        'mime' => $attachment->getMimeType()
                    ]);
                }
                return $mail;
            } else {
                return $this->from($this->data['email'])
                    ->view('mail.resume', [
                        "data" => $this->data
                    ])
                    ->attach($this->data['attachment'], [
                        'as' => $this->data['attachment']->getClientOriginalName(),
                        'mime' => $this->data['attachment']->getMimeType()
                    ]);
            }
        }
        return $this->from($this->data['email'])
            ->view('mail.resume', [
                "data" => $this->data
            ]);
    }
}
