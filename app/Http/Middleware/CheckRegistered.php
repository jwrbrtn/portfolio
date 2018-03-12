<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
class CheckRegistered
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

      $user = new User;
      $users = $user->all();
      if($users->count() < 1) {
        return redirect('/register');
      }


      return $next($request);
    }
}
