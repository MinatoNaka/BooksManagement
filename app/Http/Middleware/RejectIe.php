<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class RejectIe
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $agent = new Agent();

        if ($agent->isIE()) {
            abort(400, 'IEは利用できません。他のブラウザでアクセスしてください。');
        }

        return $next($request);
    }
}
