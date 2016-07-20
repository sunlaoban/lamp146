<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //检测当前的用户是否登录
        if($request->session()->has('id')){
            return $next($request);

        }else{
            //跳转
            return redirect('/login');
        }
    }
}
