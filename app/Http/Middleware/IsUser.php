<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsUser
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $user;
    
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $user)
    {
        $this->user = $user;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->user->guest())
        {
            return redirect(ADMIN.'/login');
        }else if( $this->user->user()->level != 'admin'||'user' )
        {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
