<?php

namespace Tests\Unit\Policies;

use App\Models\Book;
use App\Models\User;
use App\Policies\BookPolicy;
use Tests\TestCase;

class BookPolicyTest extends TestCase
{
    /**
     * @var BookPolicy
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();
        $this->SUT = new BookPolicy();
    }

    public function test_view_can(): void
    {
        $user = factory(User::class)->make(['id' => 999]);
        $book = factory(Book::class)->make(['created_by' => $user->id]);

        $this->assertTrue($this->SUT->view($user, $book));
    }

    public function test_view_cant(): void
    {
        $user = factory(User::class)->make(['id' => 999]);
        $book = factory(Book::class)->make(['created_by' => $user->id]);

        $user2 = factory(User::class)->make(['id' => 888]);

        $this->assertFalse($this->SUT->view($user2, $book));
    }

    // todo update, deleteのテストを実装
}
