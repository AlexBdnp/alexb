<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SettingController extends Controller
{
  public function SetLanguage($language)
  {
    $request = new Request();
    $request->cookies->remove('language');
    Cookie::queue('language', $language, 30*24*60);
    // dd($request->cookie('language', 'en'));
    return redirect(url('/'));
  }
}
