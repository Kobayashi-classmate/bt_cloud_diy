<?php
declare (strict_types=1);

namespace app\middleware;


class CheckAdmin
{
    public function handle($request, \Closure $next)
    {
        if (!request()->islogin) {
            if ($request->isAjax() || !$request->isGet()) {
                return response('404 Not Found')->code(404);
            }
            if (config_get('login_key') == 1) {
                return redirect('../' . config_get('backaddress') . '/login?access_key=' . config_get('access_key'));
            }
            return redirect('../' . config_get('backaddress') . '/login');
        }
        return $next($request);
    }
}
