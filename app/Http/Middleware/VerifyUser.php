<?php

namespace App\Http\Middleware;

use App\Models\DisabledUser;
use Closure;
use Illuminate\Support\Facades\Auth;

class VerifyUser
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
        $user_id = auth()->user()->id;
        $row = DisabledUser::find($user_id);
        if ( $row ){
            Auth::logout();
            notify()->flash("Account Disabled", "error", ['text'=> $row->reason]);
            return redirect()->route('login');
        }

        return $next($request);
    }


    private function check()
    {

    }
}
