<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return UserRegistered
     */
    public function build(): UserRegistered
    {
        return $this
            ->subject('ユーザ登録完了のお知らせ')
            ->text('emails/user_registered')
            ->with([
                'user' => $this->user,
            ]);
    }
}
