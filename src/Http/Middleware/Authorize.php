<?php

namespace codicastudio\NovaSettingsTool\Http\Middleware;

use Illuminate\Http\JsonResponse;
use codicastudio\NovaSettingsTool\NovaSettingsTool;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Closure;

/**
 * Class Authorize
 * @package codicastudio\NovaSettingsTool\Http\Middleware
 */
final class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return Response|JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return resolve(NovaSettingsTool::class)->authorize($request) ? $next($request) : abort(403);
    }
}
