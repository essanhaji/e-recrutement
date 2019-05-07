<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if(Auth::user()->type == 'admin'){

                return redirect('/admin/dash');
            }
            elseif(Auth::user()->type == 'recruteur')
            {
                return redirect('/recruiter/company-page');
            }
            elseif(Auth::user()->type == 'candidat')
            {
                return redirect('/candidate/candidate-profile');
            }
            else
            {
                return redirect('/');
            }
        }

        return $next($request);
    }
}
