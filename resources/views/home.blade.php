<x-app-layout title='Home'>
  @section('hero')
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
      <!-- Comic bubble 1 - top right -->
      <div class="absolute top-10 right-20 transform rotate-12 hidden lg:block">
        <div class="relative">
          <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-slate-200">
            <p class="text-sm font-medium text-slate-600">Welcome! 👋</p>
          </div>
          <div class="absolute -bottom-2 right-6 w-4 h-4 transform rotate-45 bg-white border-r-2 border-b-2 border-slate-200"></div>
        </div>
      </div>

      <!-- Original welcome text -->
      <p class="mx-auto -mt-4 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6 font-bold">Welcome to
        <span class="border-b border-dotted border-slate-300"></span>
      </p>

      <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
        <span class="inline-block">My
          <span class="relative whitespace-nowrap text-yellow-600">
            <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-yellow-300/70"
              preserveAspectRatio="none">
              <path
                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
              </path>
            </svg>
            <span class="relative" id="element"></span></span>
        </span>
        <span class="inline-block" id="element">Blog.✨</span>
      </h1>

      <!-- Comic bubble 2 - left side -->
      <div class="absolute left-10 top-1/2 transform -rotate-6 hidden lg:block">
        <div class="relative">
          <div class="bg-yellow-50 p-3 rounded-xl shadow-lg border-2 border-yellow-200">
            <p class="text-sm font-medium text-yellow-600">📚 Keep Reading!</p>
          </div>
          <div class="absolute -bottom-2 left-4 w-4 h-4 transform rotate-45 bg-yellow-50 border-l-2 border-b-2 border-yellow-200"></div>
        </div>
      </div>

      <p class="mx-auto mt-9 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6">
        <span class="inline-block" id="desc"></span>
      </p>

      <div class="mt-12 flex flex-col justify-center gap-y-5 sm:mt-10 sm:flex-row sm:gap-y-0 sm:gap-x-6">
        <a class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 bg-slate-900 text-white hover:bg-slate-700 hover:text-slate-100 active:bg-slate-800 active:text-slate-300 focus-visible:outline-slate-900 animate-fade-in-left"
          href="http://127.0.0.1:8000/blog">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" role="img" viewBox="0 0 24 24"
            aria-hidden="true" class="h-3 w-3 flex-none" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M8.824 7.287c.008 0 .004 0 0 0zm-2.8-1.4c.006 0 .003 0 0 0zm16.754 2.161c-.505-1.215-1.53-2.528-2.333-2.943.654 1.283 1.033 2.57 1.177 3.53l.002.02c-1.314-3.278-3.544-4.6-5.366-7.477-.091-.147-.184-.292-.273-.446a3.545 3.545 0 01-.13-.24 2.118 2.118 0 01-.172-.46.03.03 0 00-.027-.03.038.038 0 00-.021 0l-.006.001a.037.037 0 00-.01.005L15.624 0c-2.585 1.515-3.657 4.168-3.932 5.856a6.197 6.197 0 00-2.305.587.297.297 0 00-.147.37c.057.162.24.24.396.17a5.622 5.622 0 012.008-.523l.067-.005a5.847 5.847 0 011.957.222l.095.03a5.816 5.816 0 01.616.228c.08.036.16.073.238.112l.107.055a5.835 5.835 0 01.368.211 5.953 5.953 0 012.034 2.104c-.62-.437-1.733-.868-2.803-.681 4.183 2.09 3.06 9.292-2.737 9.02a5.164 5.164 0 01-1.513-.292 4.42 4.42 0 01-.538-.232c-1.42-.735-2.593-2.121-2.74-3.806 0 0 .537-2 3.845-2 .357 0 1.38-.998 1.398-1.287-.005-.095-2.029-.9-2.817-1.677-.422-.416-.622-.616-.8-.767a3.47 3.47 0 00-.301-.227 5.388 5.388 0 01-.032-2.842c-1.195.544-2.124 1.403-2.8 2.163h-.006c-.46-.584-.428-2.51-.402-2.913-.006-.025-.343.176-.389.206-.406.29-.787.616-1.136.974-.397.403-.76.839-1.085 1.303a9.816 9.816 0 00-1.562 3.52c-.003.013-.11.487-.19 1.073-.013.09-.026.181-.037.272a7.8 7.8 0 00-.069.667l-.002.034-.023.387-.001.06C.386 18.795 5.593 24 12.016 24c5.752 0 10.527-4.176 11.463-9.661.02-.149.035-.298.052-.448.232-1.994-.025-4.09-.753-5.844z">
            </path>
          </svg>
          <span class="ml-3">Explore</span>
        </a>
      </div>
    </div>
  @endsection

  <div class="mb-10 w-full relative">
    <!-- Comic bubble 3 - near latest posts - Adjusted position -->
    <div class="absolute -right-4 -top-4 transform -rotate-3 hidden lg:block">
      <div class="relative">
        <div class="bg-slate-50 p-3 rounded-lg shadow-lg border-2 border-slate-200">
          <p class="text-sm font-medium text-slate-600">✨ Dokumentasi!</p>
        </div>
        <div class="absolute -bottom-2 right-6 w-4 h-4 transform rotate-45 bg-slate-50 border-r-2 border-b-2 border-slate-200"></div>
      </div>
    </div>

    <div class="mb-16">
      <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold text-center sm:text-left">Postingan Terbaru</h2>
      <div class="w-full">
        <div class="grid grid-cols-3 gap-10 w-full">
          @foreach ($featuredPosts as $post)
            <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
          @endforeach
        </div>
      </div>
      <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold" href="http://127.0.0.1:8000/blog">Lebih
        Banyak...</a>
    </div>
    <hr>

    <!-- Comic bubble 4 - near older posts -->
    <div class="absolute left-0 bottom-40 transform rotate-6 hidden lg:block">
      <div class="relative">
        <div class="bg-yellow-50 p-3 rounded-xl shadow-lg border-2 border-yellow-200">
          <p class="text-sm font-medium text-yellow-600">🗃️ From the Archives</p>
        </div>
        <div class="absolute -bottom-2 left-6 w-4 h-4 transform rotate-45 bg-yellow-50 border-l-2 border-b-2 border-yellow-200"></div>
      </div>
    </div>

    <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold text-center sm:text-left">Postingan Terdahulu</h2>
    <div class="w-full mb-5">
      <div class="grid grid-cols-3 gap-10 w-full">
        @foreach ($latestPosts as $post)
          <x-posts.post-card :post="$post" class="md:col-span-1 col-span-3" />
        @endforeach
      </div>
    </div>
    <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold" href="http://127.0.0.1:8000/blog">Lebih
      Banyak...</a>
  </div>

  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    var typed = new Typed('#element', {
      strings: ['Beautifull', 'Personal'],
      typeSpeed: 100,
    });
  </script>
  <script>
    var typed = new Typed('#desc', {
      strings: ['Jangan Males Baca Dokumentasi', 'Ayo Belajar Bersama!!!'],
      typeSpeed: 100,
    });
  </script>
</x-app-layout>