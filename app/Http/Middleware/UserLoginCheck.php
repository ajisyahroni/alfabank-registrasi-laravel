<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UserLoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public $redirectTo = "/login";
    public function handle($request, Closure $next)
    {
        $condition = Auth::check();
        if($condition){
            return $next($request);
        }
        else{
            return redirect()->to($this->redirectTo);
        }
        
    }
}
