@props(['post'])

<div {{ $attributes }}>
  <a wire:navigate href="{{ route('posts.show', $post->slug) }}">
    <div class="relative">
      <img class="w-full h-72 object-cover rounded-xl" src="{{ $post->getThumbnailUrl() }}" alt="{{ $post->title }}">
      <div class="absolute bottom-2 left-2 flex flex-col sm:flex-row gap-y-1 sm:gap-x-2 text-white px-3 py-2 rounded-lg text-sm">
        @if ($category = $post->categories->first())
          <x-posts.category-badge :category="$category" />
        @endif
        <p class="text-gray-300 sm:ml-2">{{ $post->published_at }}</p>
      </div>
    </div>
  </a>
  <div class="mt-3">
    <a wire:navigate href="{{ route('posts.show', $post->slug) }}" class="text-lg font-bold text-gray-900">
      {{ $post->title }}
    </a>
  </div>
</div>
