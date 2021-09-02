<?php

namespace App\Models;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt'];
    protected $guarded = [];

    public static function store(Request $request)
    {
        
        $post = new Post();

        $post->category_id = $request['category_id'];
        $post->title = $request['title'];
        $post->slug = $request['slug'];
        $post->lang = $request['lang'];
        $post->category_id = $request['category_id'];
        $post->excerpt = Str::of($request['body'])->replaceMatches('/<(\w|\s|\/|\=|\"|\;|\:|\-|\.|\,|\(|\)|\%|\+)*>/', '')->replace('&nbsp;', ' ')->words(60);
        $post->body = $request['body'];
        $post->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
