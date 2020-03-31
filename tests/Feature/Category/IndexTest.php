<?php

namespace Tests\Feature\Category;

use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RolesAndPermissionsSeeder;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class IndexTest extends TestCase
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
            ->get(route('categories.index'))
            ->assertStatus(200);
    }

    /**
     * 認証していないとログイン画面にリダイレクト
     */
    public function test_guest_redirect(): void
    {
        $this->get(route('categories.index'))
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
            ->get(route('categories.index'))
            ->assertStatus(403);
    }

    /**
     * 登録したデータが一覧に表示される
     */
    public function test_list_items(): void
    {
        $this->user->assignRole($this->adminRole);
        $category = factory(Category::class)->create();

        $this->actingAs($this->user)
            ->get(route('categories.index'))
            ->assertSee($category->name);
    }

    /**
     * permissionあり、自分がcreatorなら操作ボタンを表示
     */
    public function test_show_authorized_buttons(): void
    {
        $this->user->assignRole($this->adminRole);
        factory(Category::class)->create([
            'created_by' => $this->user->id,
        ]);

        $this->actingAs($this->user)
            ->get(route('categories.index'))
            ->assertSee('詳細')
            ->assertSee('編集')
            ->assertSee('削除');
    }

    /**
     * permissionがない操作ボタンを非表示
     */
    public function test_hide_no_permission_buttons(): void
    {
        $this->adminRole->revokePermissionTo('category-edit');
        $this->user->assignRole($this->adminRole);
        factory(Category::class)->create([
            'created_by' => $this->user->id,
        ]);

        $this->actingAs($this->user)
            ->get(route('categories.index'))
            ->assertSee('詳細')
            ->assertDontSee('編集')
            ->assertDontSee('削除');
    }

    /**
     * 自分がcreatorじゃない場合は操作ボタンを非表示
     */
    public function test_hide_no_creator_buttons(): void
    {
        $this->user->assignRole($this->adminRole);
        factory(Category::class)->create([
            'created_by' => 999,
        ]);

        $this->actingAs($this->user)
            ->get(route('categories.index'))
            ->assertDontSee('詳細')
            ->assertDontSee('編集')
            ->assertDontSee('削除');
    }

    /**
     * パラメータで検索が行われる
     */
    public function test_search(): void
    {
        $this->user->assignRole($this->adminRole);
        factory(Category::class)->create(['name' => 'ほげ']);
        factory(Category::class)->create(['name' => 'ふが']);

        $this->actingAs($this->user)
            ->get(route('categories.index', ['name' => 'ほげ']))
            ->assertSee('ほげ')
            ->assertDontSee('ふが');
    }

    /**
     * 最大15件しか表示しない
     */
    public function test_per_page(): void
    {
        $this->user->assignRole($this->adminRole);
        factory(Category::class, 14)->create(['name' => '14件目まで']);
        factory(Category::class)->create(['name' => '15件目']);
        factory(Category::class)->create(['name' => '16件目']);

        $this->actingAs($this->user)
            ->get(route('categories.index'))
            ->assertSee('15件目')
            ->assertDontSee('16件目');
    }

    /**
     * pageパラメータで2ページ目が表示される
     */
    public function test_page_2(): void
    {
        $this->user->assignRole($this->adminRole);
        factory(Category::class, 14)->create(['name' => '14件目まで']);
        factory(Category::class)->create(['name' => '15件目']);
        factory(Category::class)->create(['name' => '16件目']);

        $this->actingAs($this->user)
            ->get(route('categories.index', ['page' => 2]))
            ->assertDontSee('15件目')
            ->assertSee('16件目');
    }
}
