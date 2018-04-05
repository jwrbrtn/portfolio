<?php

namespace App\Http\Middleware;
use App\User;
use Closure;

class doesUserExist
{


    protected $users;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


     public function __construct(User $users){
       $this->users = $users::all();
     }


    public function handle($request, Closure $next)
    {


        if($this->users->count() > 0){
          return redirect('/');
        }
        return $next($request);
    }
}
