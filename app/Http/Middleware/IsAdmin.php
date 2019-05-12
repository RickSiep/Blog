<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
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
        if($request->user()){
            $user = $request->user();
            if($user->is_admin == 1){
                return $next($request);
            } else {
                throw new HttpException(403);
//            throw new HttpException(403);
                return redirect()->route();
            }
        } else {
            throw new HttpException(403);
            return redirect()->route();
        }
    }
}
