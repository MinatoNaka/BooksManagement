<?php

namespace Tests\Feature\Category;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class StoreTest extends TestCase
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
    /**
     * @var array
     */
    private $validParams = [
        'name' => 'テストカテゴリー名',
    ];


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
            ->post(route('categories.store', $this->validParams))
            ->assertStatus(302);
    }

    /**
     * 認証していないとログイン画面にリダイレクト
     */
    public function test_guest_redirect(): void
    {
        $this->post(route('categories.store'))
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
            ->post(route('categories.store'))
            ->assertStatus(403);
    }

    /**
     * 登録後、フラッシュメッセージをセッションにセット
     */
    public function test_show_message(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->post(route('categories.store', $this->validParams))
            ->assertStatus(302)
            ->assertRedirect(route('categories.index'))
            ->assertSessionHas('flash_notification');
    }
}
