<?php

namespace Tests\Unit\Services;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use RolesAndPermissionsSeeder;
use Storage;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var UserService
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();
        $this->SUT = new UserService();
    }

    public function test_getPagedUsers_0(): void
    {
        $result = $this->SUT->getPagedUsers([]);

        $this->assertSame(0, $result->total());
    }

    public function test_getPagedUsers_no_search_params(): void
    {
        factory(User::class, 5)->create();

        $result = $this->SUT->getPagedUsers([]);

        $this->assertSame(5, $result->total());
    }

    public function test_getPagedUsers_search_name(): void
    {
        factory(User::class, 5)->create();

        factory(User::class)->create(['name' => 'テスト名前']);

        // 完全一致
        $searchParams = ['name' => 'テスト名前'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(1, $result->total());

        // 前方一致
        $searchParams = ['name' => 'テスト'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(1, $result->total());

        // 中間一致
        $searchParams = ['name' => 'ト名'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(1, $result->total());

        // 後方一致
        $searchParams = ['name' => '名前'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(1, $result->total());
    }

    // todo 他のカラムの検索

    public function test_getPagedUsers_search_multiple_params(): void
    {
        factory(User::class, 5)->create();
        factory(User::class)->create(['name' => 'テスト名前']);
        factory(User::class)->create([
            'name' => 'テスト名前',
            'email' => 'test@test.example',
        ]);

        $searchParams = ['name' => 'テスト名前'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(2, $result->total());

        $searchParams = ['name' => 'テスト名前', 'email' => 'test@test.example'];
        $result = $this->SUT->getPagedUsers($searchParams);
        $this->assertSame(1, $result->total());
    }

    public function test_getPagedUsers_pagination(): void
    {
        factory(User::class, 20)->create();

        $result = $this->SUT->getPagedUsers([]);
        $this->assertSame(20, $result->total());
        $this->assertSame(15, $result->perPage());
    }

    public function test_getPagedUsers_sort_name_asc(): void
    {
        factory(User::class)->create(['name' => 'いいい']);
        factory(User::class)->create(['name' => 'ううう']);
        factory(User::class)->create(['name' => 'あああ']);

        $sortParams = ['sort' => 'name', 'direction' => 'asc'];
        request()->merge($sortParams);
        $result = $this->SUT->getPagedUsers([]);
        $this->assertSame('あああ', $result->shift()->name);
        $this->assertSame('いいい', $result->shift()->name);
        $this->assertSame('ううう', $result->shift()->name);
    }

    public function test_getPagedUsers_sort_name_desc(): void
    {
        factory(User::class)->create(['name' => 'いいい']);
        factory(User::class)->create(['name' => 'ううう']);
        factory(User::class)->create(['name' => 'あああ']);

        $sortParams = ['sort' => 'name', 'direction' => 'desc'];
        request()->merge($sortParams);
        $result = $this->SUT->getPagedUsers([]);
        $this->assertSame('ううう', $result->shift()->name);
        $this->assertSame('いいい', $result->shift()->name);
        $this->assertSame('あああ', $result->shift()->name);
    }

    // todo 他のカラムの検索

    public function test_store(): void
    {
        $this->seed(RolesAndPermissionsSeeder::class);
        $params = [
            'name' => '名前',
            'email' => 'test@example.com',
            'password' => 'password',
            'birthday' => '2020-01-01',
            'role' => 'admin',
        ];

        $stored = $this->SUT->store($params);

        $this->assertSame($params['name'], $stored->name);
        $this->assertSame($params['email'], $stored->email);
        $this->assertSame($params['birthday'], $stored->birthday->format('Y-m-d'));
        $this->assertSame($params['role'], $stored->getRole()->name);
    }

    public function test_store_avatar(): void
    {
        Storage::fake('s3');

        $this->seed(RolesAndPermissionsSeeder::class);
        $params = [
            'name' => '名前',
            'email' => 'test@example.com',
            'password' => 'password',
            'birthday' => '2020-01-01',
            'role' => 'admin',
            'avatar' => UploadedFile::fake()->image('test.png'),
        ];

        $stored = $this->SUT->store($params);

        Storage::disk('s3')->assertExists($stored->avatar);
    }

    public function test_update(): void
    {
        $this->seed(RolesAndPermissionsSeeder::class);

        $stored = factory(User::class)->create([
            'name' => '名前',
            'email' => 'test@example.com',
            'password' => 'password',
            'birthday' => '2020-01-01',
        ])->assignRole('admin');

        $params = [
            'name' => '名前updated',
            'email' => 'test@example.comupdated',
            'birthday' => '2020-02-02',
            'role' => 'general',
        ];

        $updated = $this->SUT->update($stored, $params);

        $this->assertSame($params['name'], $updated->name);
        $this->assertSame($params['email'], $updated->email);
        $this->assertSame($params['birthday'], $updated->birthday->format('Y-m-d'));
        $this->assertSame($params['role'], $updated->getRole()->name);
    }

    public function test_destroy(): void
    {
        $stored = factory(User::class)->create([
            'name' => '名前',
            'email' => 'test@example.com',
            'password' => 'password',
            'birthday' => '2020-01-01',
        ]);

        $this->SUT->destroy($stored);

        $this->assertTrue($stored->trashed());
    }

    public function test_destroyAvatar(): void
    {
        Storage::fake('s3');

        $this->seed(RolesAndPermissionsSeeder::class);
        $params = [
            'name' => '名前',
            'email' => 'test@example.com',
            'password' => 'password',
            'birthday' => '2020-01-01',
            'role' => 'admin',
            'avatar' => UploadedFile::fake()->image('test.png'),
        ];

        $stored = $this->SUT->store($params);
        $storedAvatar = $stored->avatar;

        $this->SUT->destroyAvatar($stored);

        Storage::disk('s3')->assertMissing($storedAvatar);
        $this->assertNull($stored->avatar);
    }
}
