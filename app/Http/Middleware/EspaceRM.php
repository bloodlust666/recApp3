<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class EspaceRM
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next,$recruteurType)
       {
         if (!Auth::check()){
               // ask user to login
               return redirect ('/custom-login');
           }
           $user = Auth::user();
           $user = $request->user();
         if ($user && $user->recruteurType != 1){
            //tell user your are not manager .
            throw new \Exception("Your not recruteur");
        }
           return $next($request);

       }
}
