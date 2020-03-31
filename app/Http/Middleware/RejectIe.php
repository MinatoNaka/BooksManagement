<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RejectIe
{
    /**
     * @var Agent
     */
    private $agent;

    public function __construct(Agent $agent)
    {
        $this->agent = $agent;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->agent->isIE()) {
            throw new HttpException(400, 'IEは利用できません。他のブラウザでアクセスしてください。');
        }

        return $next($request);
    }
}
