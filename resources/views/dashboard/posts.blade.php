<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- code of Posts page -->
                <script src="https://cdn.tiny.cloud/1/4h0mux56qel7rybel5u45myfer319amh1k6w02aaqpevhh7v/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                <script>
                tinymce.init({
                  selector: '#body',
                    height: 550,
                    plugins: [
                      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                      'table emoticons template paste help'
                    ],
                    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                      'forecolor backcolor emoticons | help',
                    menu: {
                      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
                    },
                    menubar: 'favs file edit view insert format tools table help',
                    content_css: 'css/content.css'
                  });
                </script>
                @if (session('status'))
                <div class="status" style="background-color: lightgreen; padding: 5px; width: 200px; margin-bottom: 10px;">
                    {{ session('status') }}
                </div>
                @endif
                <details class="border-b border-black mb-4">
                    <summary class="text-2xl bg-white text-green-500 px-3">Add new post</summary>
                    <form action="{{ route('posts.create') }}" method="post" id="article-form" class="flex flex-col space-y-2">
                        @csrf
                        <p><input type="text" name="title" id="title" placeholder="Title"></p>
                        <p><input type="text" name="slug" id="slug" placeholder="slug"></p>
                        <div class="flex text-justify w-full justify-left space-x-2">
                          <input type="text" name="lang" id="lang" placeholder="lang-code: en, ua, ru, etc.">
                          <select name="category_id">
                            @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                          <input type="submit" value="Add post" class="p-3 px-6 rounded-xl bg-green-500 text-white text-md">
                        </div>
                        <p><textarea name="body" id="body" cols="60" rows="20"></textarea></p>
                    </form>
                </details>
                <div>
                    @foreach($posts as $post)
                    <div class="post">
                        <div>
                            <span class="title" style="font: normal bold normal xx-large normal \"Gill Sans\", sans-serif;">{{ $post->title }}</span>
                            <a href="{{ route('edit.form') }}/{{ $post->slug }}" class="text-blue-600">Edit</a>
                        </div>
                        <div class="date-created" style="color: grey; ">{{ $post->created_at }}</div>
                        <div class="post-excerpt">{{ $post->excerpt }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
