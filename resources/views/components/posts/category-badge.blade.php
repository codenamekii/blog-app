@props(['category'])
<x-badge wire:navigate href="{{ route('posts.index', ['category' => $category->title]) }}" :textColor="$category->text_color"
  :bgColor="$category->bg_color">
  <p class="text-xs font-semibold">{{ $category->title }}</p>
</x-badge>
