<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@isset($title) {{ $title }} | @endisset {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <link rel="stylesheet" href="{{ url(asset('css/app.css')) }}">
        <link rel="stylesheet" href="{{ url(asset('css/prism.css')) }}">


        <!-- Scripts -->
        <script src="{{ url(asset('js/app.js')) }}" defer></script>
        <!-- <link rel="stylesheet" href="{{ url(asset('css/app.css')) }}" defer> -->

    </head>
    <body class="font-sans">
      <div class="border-b grid grid-cols-1 sm:grid-cols-10">
        <div class="sm:col-span-3 p-2 flex justify-center items-center " style="font-size: 1.4rem"><a href="/">Blog about PHP</a></div>
        <div class="col-span-1 sm:col-start-4 sm:col-span-7 flex flex-wrap w-full justify-around text-xl text-cyan-800 font-sans p-2">
          <a href="/laravel" class="px-4 py-2 hover:bg-green-600 hover:text-white">Laravel</a>
          <a href="/opencart" class="px-4 py-2 hover:bg-green-600 hover:text-white">Opencart</a>
          <a href="/about" class="px-4 py-2 rounded-sm hover:bg-green-600 hover:text-white">About</a>
          {{--
          <div class="static">
            @if(isset($_COOKIE['language']))
              @switch($_COOKIE['language'])
                @case('en')
                <a href="" onclick="event.preventDefault(); this.nextSibling.nextSibling.classList.toggle('invisible'); this.parentElement.classList.toggle('bg-blue-100'); console.log(this.parentElement) ">
                  <img class="w-10 p-2 " src="https://image.flaticon.com/icons/png/128/206/206592.png" >
                </a>
                @break

                @case('ru')
                <a href="" onclick="event.preventDefault(); this.nextSibling.nextSibling.classList.toggle('invisible'); this.parentElement.classList.toggle('bg-blue-100'); console.log(this.parentElement) ">
                  <img class="w-10 p-2 " src="https://image.flaticon.com/icons/png/128/206/206604.png" >
                </a>
                @break

                @case('uk')
                <a href="" onclick="event.preventDefault(); this.nextSibling.nextSibling.classList.toggle('invisible'); this.parentElement.classList.toggle('bg-blue-100'); console.log(this.parentElement) ">
                  <img class="w-10 p-2 " src="https://image.flaticon.com/icons/png/128/206/206707.png" >
                </a>
                @break

                @default
                <a href="" onclick="event.preventDefault(); this.nextSibling.nextSibling.classList.toggle('invisible'); this.parentElement.classList.toggle('bg-blue-100'); console.log(this.parentElement) ">
                  <img class="w-10 p-2 " src="https://image.flaticon.com/icons/png/128/206/206592.png" >
                </a>
              @endswitch
            @else
              <a href="" onclick="event.preventDefault(); this.nextSibling.nextSibling.classList.toggle('invisible'); this.parentElement.classList.toggle('bg-blue-100'); console.log(this.parentElement) ">
                <img class="w-10 p-2 " src="https://image.flaticon.com/icons/png/128/206/206592.png" >
              </a>              
            @endif
            <ul class="w-max divide-y bg-blue-100 divide-white absolute invisible">
              @if(!isset($_COOKIE['language']) || $_COOKIE['language'] == 'en')
                <li><a href="#" class="hidden"><img src="https://image.flaticon.com/icons/png/128/206/206592.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @else
                <li><a href="/set-lang/en"><img src="https://image.flaticon.com/icons/png/128/206/206592.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @endif

              @if(isset($_COOKIE['language']) && $_COOKIE['language'] == 'ru')
                <li><a href="#" class="hidden"><img src="https://image.flaticon.com/icons/png/128/206/206604.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @else
                <li><a href="/set-lang/ru"><img src="https://image.flaticon.com/icons/png/128/206/206604.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @endif
              
              @if(isset($_COOKIE['language']) && $_COOKIE['language'] == 'uk')
                <li><a href="#" class="hidden"><img src="https://image.flaticon.com/icons/png/128/206/206707.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @else
                <li><a href="/set-lang/uk"><img src="https://image.flaticon.com/icons/png/128/206/206707.png" class="w-10 p-2 hover:bg-blue-300"></a></li>
              @endif
            </ul>
          </div>
          --}}
        </div>
      </div>
      <div class="md:px-28">
        @yield('content')
      </div>
      <script src="{{ url(asset('js/prism.js')) }}"></script>
    </body>
</html>
