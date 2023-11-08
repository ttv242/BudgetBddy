<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $user = Auth::user();

        if (Auth::check() && $user->isAdmin() == $role) {
            $user = Auth::user();
            if ($user->avatar_img == null) {
                $user->avatar_img = "blank.svg";
            }
            View::share('user', $user);

            // Người dùng có vai trò tương ứng với $role
            return $next($request);
        }


        return response('Unauthorized', Response::HTTP_FORBIDDEN);
    }
}
