<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Setting;

class CheckSetup
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
          $setup = new Setting;
          $setting = $setup::all();

          if($setting->count() < 1){
            return redirect('/setup');
          }
          return $next($request);
    }
}
