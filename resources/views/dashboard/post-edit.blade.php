<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <!-- <script src="https://cdn.tiny.cloud/1/4h0mux56qel7rybel5u45myfer319amh1k6w02aaqpevhh7v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <script src="{{ url(asset('tinymce/tinymce.min.js')) }}"></script>
    <script>
      tinymce.init({
        selector: '#body',
        height: 700,
        plugins: 'advlist link image lists codesample code',
        toolbar: 'undo redo | styleselect | alignleft aligncenter alignright alignjustify | outdent indent | image | codesample code',
        a_plugin_option: true,
        a_configuration_option: 400
      });
    </script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="{{ route('dashboard.posts') }}" class="p-2 bg-yellow-500 text-white text-md rounded-lg">← Back to posts</a>
            </div>
            @if (session('status'))
                <div class="status" style="background-color: lightgreen; padding: 5px; width: 200px; margin-bottom: 10px;">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('edit.apply') }}" method="post" id="article-form" class="flex flex-col space-y-2">
                @csrf
                <p><input type="text" name="title" id="title" value="{{ $post->title }}"></p>
                <p><input type="text" name="slug" id="slug" value="{{ $post->slug }}"></p>
                <div class="flex text-justify w-full justify-left space-x-2">
                  <input type="text" name="lang" id="lang" value="{{ $post->lang }}">
                  <select name="category_id">
                    @foreach($categories as $category)
                      @if ($post->category->id == $category->id)
                      <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                      @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endif
                    @endforeach
                  </select>
                  <input type="submit" value="Save" class="p-3 px-6 bg-green-500 text-white text-md">
                </div>
                <textarea name="body" id="body" cols="60" rows="20">{{ $post->body }}</textarea>
                </form>
        </div>
    </div>
</x-app-layout>