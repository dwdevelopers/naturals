<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$userType): Response
    {
        if (!Auth::check()) {
            return redirect()->route($request->is('website/*') ? 'login' : 'admin.login');
        }
        if(auth()->user()->type == $userType){
            return $next($request);
        }
          
        return redirect()->back()->with('error', 'You do not have permission to access this page.');
    }
}
