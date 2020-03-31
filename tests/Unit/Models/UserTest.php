<?php

namespace Tests\Unit\Models;


use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();
        $this->SUT = factory(User::class)->create();
    }

    public function test_getRole(): void
    {
        $this->seed(RolesAndPermissionsSeeder::class);

        $assignRole = Role::inRandomOrder()->first();
        $this->SUT->assignRole($assignRole);

        $this->assertSame($assignRole->name, $this->SUT->getRole()->name);
    }

    // その他、スコープやリレーションの複雑なクエリなどがあればテストを記述する
}
