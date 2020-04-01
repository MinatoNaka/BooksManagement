<?php

namespace Tests\Unit\Requests;


use App\Http\Requests\StoreUserRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use RolesAndPermissionsSeeder;
use Tests\TestCase;
use Validator;

class StoreUserRequestTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var StoreUserRequest
     */
    private $SUT;
    /**
     * @var array
     */
    private $validParams = [
        'name' => 'テスト名前',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'birthday' => '2020-01-01',
        'avatar' => null,
        'role' => 'admin',
    ];

    protected function setUp(): void
    {
        parent::setUp();
        $this->SUT = new StoreUserRequest();
        $this->seed(RolesAndPermissionsSeeder::class);

        $this->validParams['avatar'] = UploadedFile::fake()->image('test.png');
    }

    public function test_validate_pass(): void
    {
        $validator = Validator::make($this->validParams, $this->SUT->rules());

        $this->assertTrue($validator->passes());
    }

    public function test_validate_name_required(): void
    {
        $params = $this->validParams;

        $params['name'] = null;
        $validator = Validator::make($params, $this->SUT->rules());
        $this->assertTrue($validator->fails());
    }

    public function test_validate_name_max(): void
    {
        $params = $this->validParams;

        $params['name'] = str_repeat('あ', 256);
        $validator = Validator::make($params, $this->SUT->rules());
        $this->assertTrue($validator->fails());
    }

    // todo 他のカラムのバリデーションテスト
}
