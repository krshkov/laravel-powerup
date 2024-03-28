<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMustFillData
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ignoreList = [
            'user.edit',
            'user.update',
            'password.request.redirect',
        ];

        if (in_array($request->route()->getName(), $ignoreList)) {
            return $next($request);
        }

        $mustBeFilled = [];
        $user = auth()->user();

        foreach ($user->mustFill as $item) {
            if (empty($user->{$item})) {
                $mustBeFilled[] = $item;
            }
        }

        if (empty($mustBeFilled)) {
            return $next($request);
        }

        $msg = 'You must fill the listed fields: ';

        foreach ($mustBeFilled as $i => $item) {
            $msg .= $item;

            if ($i != count($mustBeFilled) - 1) {
                $msg .= ', ';
            }
        }

        session()->flash('info', $msg);
        return redirect(route('user.edit'))->with(compact('user'));
    }
}
