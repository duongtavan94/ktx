<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $checkQuyen = Session::get('user.chucvu');
        $arrayCheck = ['2', '3'];
        if (in_array($checkQuyen, $arrayCheck)) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
