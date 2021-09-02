@extends('layouts.general')

@section('content')
  <div class="m-3 p-4">
    <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
    <div class="text-gray-600 text-sm">{{ $post->created_at }}</div>
    <div>{!! $post->body !!}</div>
  </div>
@endsection