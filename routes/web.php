<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

/*
  DASHBOARD 
*/
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
  Route::prefix('dashboard')->group(function () {
      Route::get('/', function () {
          return view('dashboard');
      })->name('dashboard');

      Route::get('/posts', function () {
          // dd(Post::all()->sortByDesc('created_at')[0]->slug);
          return view('dashboard.posts', [ 'posts' => Post::all()->sortByDesc('created_at'), 'categories' => Category::all() ]);
      })->name('dashboard.posts');

      Route::post('/posts/create', [PostController::class, 'create'])->name('posts.create');
      
      Route::get('/post/edit/{slug?}', [PostController::class, 'editForm'])->name('edit.form');
      Route::post('/post/edit', [PostController::class, 'editApply'])->name('edit.apply');
  });

  Route::get('/tinker', function () {
      return '<img src="' . asset('public/bliss.png') . '">';
      
  });

});

Route::get('/test', [PostController::class, 'test']);

Route::get('/set-lang/{language}', [SettingController::class, 'SetLanguage']);

Route::get('/', function (Request $request) {
  return view('posts', [ 'posts' => Post::all()->where('lang', '=', $request->cookie('language', 'en'))->sortByDesc('created_at') ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/{category:slug}', function(Category $category, Request $request) {
  // dump($request->cookie('language'));
  // dump($category->posts);
  // dd($category->posts);
  return view('posts', [
    'posts' => $category->posts->where('lang', '=', $request->cookie('language', 'en'))->sortByDesc('created_at'),
    'title' => $category->name
  ]);
});

Route::get('/{category}/{post:slug}', function($category, Post $post) {
  return view('post', [
    'post' => $post,
    'title' => $post->title
  ]);
});
