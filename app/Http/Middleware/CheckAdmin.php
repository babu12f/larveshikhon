<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if(!auth()->check()) return redirect('/login');
        $user = auth()->user();

        if($user->user_type != 'admin')
        {
            return back()->with('success', 'Your have no permission to enter this area :!');
        }

        return $next($request);
    }
}
