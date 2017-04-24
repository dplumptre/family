<?php

namespace App\Http\Middleware;

use Closure;

class UpdateProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() == null)
            return response('Insufficient permission', 401);

        if ($request->user()->userDetail == null):
            notify()->flash('Incomplete Profile', 'error', ['text' => 'You need to complete your profile before you continue']);
            return redirect()->route('profile');
        endif;
        return $next($request);
    }
}
