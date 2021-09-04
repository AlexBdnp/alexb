<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function create(Request $request)
    {
        Post::store($request);
        return redirect(route('dashboard.posts'))->with('status', 'Post created');
    }

    public function editForm($slug)
    {
      $post = Post::all()->where('slug', '=', $slug)->first();
      return view('dashboard.post-edit', ['post'=> $post, 'categories'=>Category::all()]);
    }

    public function editApply(Request $request)
    {
        $post = Post::all()->where('slug', '=', $request->slug)->first();
        $post->update(['title' => $request['title'], 'slug' => $request['slug'], 'lang' => $request['lang'], 'category_id' => $request['category_id'] , 'body' => $request['body'], 'updated_at' => now(), 'excerpt' => Str::of($request['body'])->replaceMatches('/<(\w|\s|\/|\=|\"|\;|\:|\-|\.|\,|\(|\)|\%|\+)*>/', '')->replace('&nbsp;', ' ')->words(60)]);
        return redirect(route('dashboard.posts'))->with('status', 'Post has been edited!');
    }

    public function test(Request $request)
    {
      // Cookie::queue('language', 'en', 10);
      // setcookie('language', 'ua', time()+60*60*24*30, '/');
      // dd($_COOKIE['language']);
      // session(['language' => 'ru']);
      // $request->session()->put('language', 'ru');
      // dd(session('language'));
      // dd($request->cookie('language'));
      // dd(FacadesRoute::current());
      // dd(Category::find(2)->posts);
      // dump(request()->url());
      // dump(request()->fullUrl());
      // dump(request()->getBaseUrl());
    }
}
