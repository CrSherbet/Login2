<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
       
        if(Auth::check()){
            return redirect('/main');
        } else {
            if(Auth::attempt(['username' => $request->get('username'),
                           'password' => $request->get('password'),
                           'project' => $request->get('project')],
                           $request->get('remember'))) {
                return $next($request);
            } else {
                return redirect('/login')->withInput()->with('message', 'Incorrect!! Please login again.');
            }
        }
    }
}
