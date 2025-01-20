@props(['post'])

<div
  {{ $attributes->merge(['class' => 'bg-gradient-to-br from-cyan-500 via-pink-500 to-yellow-500 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2']) }}>
  <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
    <div class="relative group">
      <img class="w-full h-72 object-cover rounded-t-xl group-hover:scale-105 transition-transform duration-300"
        src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}">
      <div class="absolute bottom-4 left-4 bg-black/70 text-white px-4 py-2 rounded-lg text-sm flex gap-2 items-center">
        @if ($category = $post->categories->first())
          <x-posts.category-badge :category="$category" />
        @endif
        <span class="text-gray-300">{{ $post->published_at }}</span>
      </div>
    </div>
  </a>
  <div class="p-6 bg-white bg-opacity-80 backdrop-blur-md rounded-b-xl">
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}"
      class="text-xl font-bold text-gray-900 hover:text-purple-600 transition-colors">
      {{ $post->title }}
    </a>
    <p class="text-gray-700 mt-3">
      {{ Str::limit(strip_tags($post->content), 100, '...') }}
    </p>
    <div class="mt-4">
      <a href="{{ route('posts.show', $post->slug) }}"
        class="inline-block px-6 py-3 bg-gradient-to-r from-purple-500 to-orange-500 text-white font-semibold rounded-md shadow-md hover:from-orange-500 hover:to-purple-500 transition-all">
        Read More
      </a>
    </div>
  </div>
</div>
