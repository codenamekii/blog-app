<div class="flex space-x-5">
  <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="text-bold">
    {{ __('Login') }}
  </x-nav-link>
  <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')" class="text-bold">
    {{ __('Register') }}
  </x-nav-link>
</div>
