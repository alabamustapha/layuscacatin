<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminExist
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
        $admin_count = User::where('role', 'admin')->count();

        if( $admin_count == 0 && !Auth::user() ){
            return redirect('install');
        }
        return $next($request);
    }
}
