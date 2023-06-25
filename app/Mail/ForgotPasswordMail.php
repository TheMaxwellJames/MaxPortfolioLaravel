<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPasswordMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $user;
    public $randomPassword;

    public function __construct($user, $randomPassword)
    {
        $this->user = $user;
        $this->randomPassword = $randomPassword;
    }

    public function build()
    {
        return $this->markdown('email.forgot_password')
            ->subject(config('app.name') . ', Forgot Password');
    }
}
