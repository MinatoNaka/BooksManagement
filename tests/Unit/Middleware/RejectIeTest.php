<?php

namespace Tests\Unit\Middleware;

use App\Http\Middleware\RejectIe;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RejectIeTest extends TestCase
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var Agent
     */
    private $agent;

    protected function setUp(): void
    {
        parent::setUp();
        $this->request = new Request();
        $this->agent = new Agent();
    }

    public function test_handle_ok(): void
    {
        $this->agent->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36');
        $SUT = new RejectIe($this->agent);
        $result = $SUT->handle($this->request, function ($_) {
            return true;
        });

        $this->assertTrue($result);
    }

    public function test_handle_ng(): void
    {
        $this->expectException(HttpException::class);

        $this->agent->setUserAgent('Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko');
        $SUT = new RejectIe($this->agent);
        $result = $SUT->handle($this->request, function ($_) {
            return true;
        });
    }
}
