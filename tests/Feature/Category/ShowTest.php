<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class ShowTest extends TestCase
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
     * @var Category
     */
    private $category;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed(RolesAndPermissionsSeeder::class);
        $this->adminRole = Role::findByName('admin');
        $this->user = factory(User::class)->create();
        $this->category = factory(Category::class)->create(['created_by' => $this->user->id]);
    }

    /**
     * 認証済みなら正常レスポンス
     */
    public function test_authenticated(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->get(route('categories.show', $this->category))
            ->assertStatus(200)
            ->assertSee('カテゴリー詳細');
    }

    /**
     * 認証していないとログイン画面にリダイレクト
     */
    public function test_guest_redirect(): void
    {
        $this->get(route('categories.show', $this->category))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    /**
     * permissionがない場合は403
     */
    public function test_permission_403(): void
    {
        $this->adminRole->revokePermissionTo('category-view');
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->get(route('categories.show', $this->category))
            ->assertStatus(403);
    }

    /**
     * 自分がcreatorじゃない場合は403
     */
    public function test_no_creator_403(): void
    {
        $user2 = factory(User::class)->create()->assignRole($this->adminRole);

        $this->actingAs($user2)
            ->get(route('categories.show', $this->category))
            ->assertStatus(403);
    }

    /**
     * 対象データがページに表示される
     */
    public function test_show_data(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->get(route('categories.show', $this->category))
            ->assertStatus(200)
            ->assertSee($this->category->name);
    }
}
