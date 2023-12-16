<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /* Mình chặn lại bằng cách dùng Auth::check, là check xem mình đã đăng nhập được hay chưa */
        if(Auth::check() && Auth::user()->level == 1){
            /* check nếu là user thì sẽ vô riêng, admin vô riêng */
            // if(Auth::user()->level == 1){
            //     return redirect()->route();
            // }else{
            //     return redirect()->route();
            // }
            return $next($request); /* đây là hàm Cho phép đi vô */
        }
        /* Nếu chưa đăng nhâp thì ko cho vô, bắt nó back lại  */
        return redirect('/');
        /* muốn xài được middleware thì phải khai báo nó trong file Kernal */
    }
}
