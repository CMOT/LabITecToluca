<?php

namespace labtectoluca\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class Admin
{
    
    protected $auth;
    
    public function __construct(Guard $auth){
        $this->auth=$auth;
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
        if($this->auth->user()->rol!= 'Admin'){
//            return redirect()->to('/users/index');
//        }else{
            return redirect()->to('/instructor');
        }
        return $next($request);
    }
}
