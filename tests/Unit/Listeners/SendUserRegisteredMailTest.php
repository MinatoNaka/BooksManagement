<?php

namespace Tests\Unit\Listeners;

use App\Events\UserRegistered;
use App\Listeners\SendUserRegisteredMail;
use App\Models\User;
use Mail;
use Tests\TestCase;

class SendUserRegisteredMailTest extends TestCase
{
    /**
     * @var UserRegistered
     */
    private $event;
    /**
     * @var SendUserRegisteredMail
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();

        $user = factory(User::class)->make();
        $this->event = new UserRegistered($user);

        $this->SUT = new SendUserRegisteredMail();
    }

    public function test_handle_send_mail(): void
    {
        Mail::fake();

        $this->SUT->handle($this->event);

        Mail::assertSent(\App\Mail\UserRegistered::class);
    }
}
