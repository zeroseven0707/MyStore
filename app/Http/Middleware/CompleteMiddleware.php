<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompleteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role_as == '0') {
                if (!Auth::user()->firstname OR !Auth::user()->lastname OR !Auth::user()->addres1 OR !Auth::user()->addres2 OR !Auth::user()->city OR !Auth::user()->state OR !Auth::user()->country OR !Auth::user()->nohp) {
                    return back()->with('error','please complete the profile');
                }else {
                    return $next($request);
                }
            }else {
            return redirect('/')->with('error','access denid');
            }
        }else {
            return redirect('/login')->with('error','Please login first');
        }
    }
}
