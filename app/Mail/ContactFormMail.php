<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $formData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("asmi-work046@yandex.ru","Asmi-Studio")
            ->subject("Сообщение с Asmi-Studio")
            ->replyTo('info@asmi-studio.ru', 'Asmi-Studio - разработка сайтов')
            ->view('mails.allMail')
            ->with([
            "formData" => $this->formData
        ]);
    }
}
