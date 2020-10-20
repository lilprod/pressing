<?php

namespace App\Http\Middleware;

use Closure;
use App\Licence;
use Illuminate\Support\Facades\Auth;
use App\User;

class CheckLicence
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
        $licence = Licence::find(1);

        if (auth()->check() && $licence->is_activated == 0) {

            auth()->logout();

            $message = "La licence de votre application est expirée. Veuillez l'activer svp !";

            return redirect()->route('login')->withMessage($message);

            //return redirect()->route('login')->with('error', $message);
        }

        /*if (auth()->check() && $licence->is_activated == 0 && !Auth::user()->hasPermissionTo('Roles Administration & Permission')) {

            auth()->logout();

            $message = 'Your account has been suspended. Please contact Administrator.';

            return redirect()->route('login')->withMessage($message);
        }*/

        return $next($request);
    }
}
