<?php

namespace App\Http\Middleware;

use Closure;

class StudentCheck
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
        if($request->user()->type != 'student'){
            return redirect('/admin');
        }
        //if ($request->User()('age') <= 200) {
         //   var_dump('WOLOLO IS STUDENT');
        //}
        return $next($request);
    }
}
