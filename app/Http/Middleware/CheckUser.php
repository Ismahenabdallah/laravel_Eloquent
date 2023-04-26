<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    public function handle(Request $r, Closure $next): Response
    {

        if (auth()->user()->status =='inactive') {
            return response('No Access , Active your Email');

        }

        return $next($r);
    }
}
