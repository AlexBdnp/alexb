@extends('layouts.general')

@section('content')
<div class="w-full flex justify-center">
  <div class="bg-blue-200 rounded-3xl m-4 p-4 shadow-lg max-w-screen-lg font-medium">
    <div class="grid grid-cols-1 sm:grid-cols-2 font-sans tracking-wider">
      <div class="flex flex-col place-items-center">
        <span class="text-3xl">Babanskyi Oleksii</span>
        <span class="text-green-700 bg-white px-2 border-green-500 border-4 mb-2 md:mb-0 text-lg font-bold">Available for work</span>
      </div>
      <div class="sm:order-first sm:row-span-3 flex place-content-center">
        <div class="w-4/5 rounded-3xl bg-black p-0">
          <img class="rounded-3xl shadow-lg" src="https://loudcar.com.ua/image/catalog/avatar.jpg">
        </div>
      </div>
      <div>
        <p class="h-22 mt-2">
          I'm junior web developer and it's my blog where 
          I public my articles about PHP programing. My number one priority is to work with Laravel framework,
          but I don't mind about projects on Opencart or other PHP-based technologies.
        </p>
        <div class="mt-3 font-semibold">Skills:</div>
        <ul>
          <li><b>Opencart</b>: 1+ year</li>
          <li><b>Laravel</b>: currently learning</li>
          <li><b>Front-end</b>: basics of Tailwind, Bootstrap, jQuery</li>
        </ul>
        <div class="w-full mt-6 mb-2 font-bold">Feel free to address me:</div>
        <div class="">
          <a href="https://join.skype.com/invite/FTvlrrgWJedd" class="flex mb-2">
            <img src="https://www.vectorico.com/wp-content/uploads/2018/02/Skype-Logo-300x300.png" class="w-6">
            <span class="ml-2">coder95@i.ua</span>
          </a>
          <a href="mailto:coder95@i.ua" class="flex">
            <img class="w-6" src="https://image.flaticon.com/icons/png/512/561/561127.png">
            <span class="ml-2">coder95@i.ua</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection