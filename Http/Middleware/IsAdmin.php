<?php
  
namespace App\Http\Middleware;
  
use Closure;
use Illuminate\Http\Request;
   
class IsAdmin
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

        if(!session()->has('LoggedUser') && ($request->path() !='auth/login' && $request->path() !='auth/register-team')){
            return redirect('auth/login')->with('fail','You must be logged in');
        }

        if(session()->has('LoggedUser') && ($request->path() == 'auth/login' || $request->path() == 'auth/register-team')){
            return back();
        }
        return $next($request);
    }
}