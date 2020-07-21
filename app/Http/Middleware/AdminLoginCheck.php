<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public $redirectTo = "admin/login";
    public function handle($request, Closure $next)
    {
        $condition = Auth::guard('admin')->check();
        if($condition){
            return $next($request);
        }
        else{
            return redirect()->to($this->redirectTo);
        }
        
    }
}
