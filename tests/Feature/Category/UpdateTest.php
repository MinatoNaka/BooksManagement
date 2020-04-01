<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class UpdateTest extends TestCase
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
        $this->category = factory(Category::class)->create(['created_by' => $this->user->id]);
    }

    /**
     * 認証済みなら正常レスポンス
     */
    public function test_authenticated(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->put(route('categories.update', $this->category), $this->validParams)
            ->assertStatus(302)
            ->assertRedirect(route('categories.index'));
    }

    /**
     * 認証していないとログイン画面にリダイレクト
     */
    public function test_guest_redirect(): void
    {
        $this->put(route('categories.update', $this->category))
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
            ->put(route('categories.update', $this->category))
            ->assertStatus(403);
    }

    /**
     * 自分がcreatorじゃない場合は403
     */
    public function test_no_creator_403(): void
    {
        $user2 = factory(User::class)->create()->assignRole($this->adminRole);

        $this->actingAs($user2)
            ->put(route('categories.update', $this->category))
            ->assertStatus(403);
    }

    /**
     * 更新後、フラッシュメッセージをセッションにセット
     */
    public function test_show_message(): void
    {
        $this->user->assignRole($this->adminRole);

        $this->actingAs($this->user)
            ->put(route('categories.update', $this->category), $this->validParams)
            ->assertStatus(302)
            ->assertRedirect(route('categories.index'))
            ->assertSessionHas('flash_notification');
    }

    /**
     * バリデーションエラーで編集画面にリダイレクト
     */
    public function test_validate(): void
    {
        $this->user->assignRole($this->adminRole);
        $this->validParams['name'] = null;

        $this->actingAs($this->user)
            ->withHeaders(['Referer' => route('categories.edit', $this->category)])
            ->put(route('categories.update', $this->category), $this->validParams)
            ->assertStatus(302)
            ->assertRedirect(route('categories.edit', $this->category));
    }
}
