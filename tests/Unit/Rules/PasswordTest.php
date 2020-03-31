<?php

namespace Tests\Unit\Rules;


use App\Rules\Password;
use Tests\TestCase;

class PasswordTest extends TestCase
{

    /**
     * @var Password
     */
    private $SUT;

    protected function setUp(): void
    {
        parent::setUp();
        $this->SUT = new Password();
    }

    public function test_passes_valid(): void
    {
        $this->assertTrue($this->SUT->passes('password', 'abcd1234'));
        $this->assertTrue($this->SUT->passes('password', 'abcd1234abcd1234'));
    }

    public function test_passes_invalid(): void
    {
        $this->assertFalse($this->SUT->passes('password', null));
        $this->assertFalse($this->SUT->passes('password', 'abcd123'));
        $this->assertFalse($this->SUT->passes('password', 'abcd1234abcd1234a'));
    }
}
