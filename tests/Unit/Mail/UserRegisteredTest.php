<?php

namespace Tests\Unit\Mail;

use App\Mail\UserRegistered;
use App\Models\User;
use Mail;
use Tests\TestCase;

class UserRegisteredTest extends TestCase
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var UserRegistered
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->make();
        $this->SUT = new UserRegistered($this->user);
    }

    public function test_send_to(): void
    {
        Mail::fake();

        Mail::to($this->user)->send($this->SUT);

        Mail::assertSent(UserRegistered::class, function ($mail) {
            return $mail->hasTo($this->user->email);
        });
    }
}
