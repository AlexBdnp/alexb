<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class Language
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
      
        // if(!isset($_COOKIE['language'])) {
        //   setcookie('language', 'ru', time()+60*60*24*30);
        // };
        // if(!$request->hasCookie('language')) {
        //   dd('cookie is null');
        //   cookie('language', 'ru', 10);
        // }
        // cookie('language', 'ru', 10);
        // $request->cookies->add(['language' => 'ru']);
        
        // cookie('language', 'ua');
        // Cookie::queue('language', 'hr');
        // dd(Cookie::get('language'));
        // dd($request->cookies);

        // setcookie('language', '', time()-1, '/');
        // dd($_COOKIE['language']);
        // if(!Cookie::has('language')){

        // 1 -------------------
          // $request->cookies->add(['language' => 'en']);

        // 2 ------Не работает-------------
        // cookie('language', 'en', 100);
        
        // 3 -----------------------------
        // $request->cookies->remove('language');
        // Cookie::queue('language', 'ru', 1);
        
        if($request->cookie('language') === null) {
          Cookie::queue('language', 'en', 30*24*60);
        }
        return $next($request);
    }
}
