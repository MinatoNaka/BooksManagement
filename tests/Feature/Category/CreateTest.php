<?php

namespace Tests\Feature\Category;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User
     */
    private $user;
    /**
     * @var Role
     */
    private $adminRole;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(RolesAndPermissionsSeeder::class);
        $this->adminRole = Role::findByName('admin');
        $this->user = factory(User::class)->create();
    }

    /**
     * 認証済みなら正常レスポンス
     */
    public function test_authenticated(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->get(route('categories.create'))
            ->assertStatus(200)
            ->assertSee('カテゴリー登録');
    }

    /**
     * 認証していないとログイン画面にリダイレクト
     */
    public function test_guest_redirect(): void
    {
        $this->get(route('categories.create'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    /**
     * permissionがない場合は403
     */
    public function test_permission_403(): void
    {
        $this->adminRole->revokePermissionTo('category-edit');
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->get(route('categories.create'))
            ->assertStatus(403);
    }
}
