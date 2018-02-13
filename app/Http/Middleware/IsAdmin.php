<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
class IsAdmin
{


    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $admin;
    
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $admin)
    {
        $this->admin = $admin;
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
        if($this->admin->guest())
        {
            return redirect(ADMIN.'/login');
        }else if( $this->admin->user()->level != 'admin' )
        {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
