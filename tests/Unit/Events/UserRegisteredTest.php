<?php

namespace Tests\Unit\Events;

use App\Events\UserRegistered;
use App\Models\User;
use Tests\TestCase;

class UserRegisteredTest extends TestCase
{
    public function test_construct_set_user(): void
    {
        $user = factory(User::class)->make();

        $SUT = new UserRegistered($user);

        $this->assertSame($user, $SUT->user);
    }
}
