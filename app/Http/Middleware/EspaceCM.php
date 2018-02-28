<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class EspaceCM
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next,$candidatType)
       {
         if (!Auth::check()){
               // ask user to login
               return redirect ('/custom-login');
           }
           $user = Auth::user();
           $user = $request->user();
         if ($user && $user->candidatType != 1){
            //tell user your are not manager .
            throw new \Exception("Your not candidat");
        }
           return $next($request);

       }
}
