<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class LoginUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $data = Auth::guard('adminss')->user();
        $data = session('userid');
          if($data){
            return $next($request);
          }else{
            return redirect('/');
          }
    }
}
