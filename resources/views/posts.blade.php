@extends('layouts.general')

@section('content')
  @if(count($posts) === 0)
    <p class="w-full flex justify-center text-3xl text-gray-400 py-4">No posts in this category for now</p>
  @else
    @foreach($posts as $post)
    <div class="m-3 p-4 bg-indigo-100 rounded-lg">
      <h2><a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="text-2xl font-bold hover:text-blue-800">{{ $post->title }}</a></h2>
      <div class="text-gray-600 text-sm">{{ $post->created_at }}</div>
      <div>{{ $post->excerpt }}</div>
    </div>
    @endforeach
  @endif
@endsection