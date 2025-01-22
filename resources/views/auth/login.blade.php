<x-app-layout title="Login">
    <!-- Added mx-auto to center the container -->
    <div class="relative max-w-md mx-auto">
        <!-- Comic bubble 1 - Welcome message -->
        <div class="absolute -top-4 left-10 transform -rotate-6 hidden lg:block">
            <div class="relative">
                <div class="bg-white p-4 rounded-2xl shadow-lg border-2 border-slate-200">
                    <p class="text-sm font-medium text-slate-600">Welcome back! 👋</p>
                </div>
                <div class="absolute -bottom-2 left-6 w-4 h-4 transform rotate-45 bg-white border-l-2 border-b-2 border-slate-200"></div>
            </div>
        </div>

        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <!-- Comic bubble 2 - Security reminder -->
            <div class="absolute top-20 -right-16 transform rotate-3 hidden lg:block">
                <div class="relative">
                    <div class="bg-yellow-50 p-3 rounded-xl shadow-lg border-2 border-yellow-200">
                        <p class="text-sm font-medium text-yellow-600">🔒 Stay secure!</p>
                    </div>
                    <div class="absolute -bottom-2 right-6 w-4 h-4 transform rotate-45 bg-yellow-50 border-r-2 border-b-2 border-yellow-200"></div>
                </div>
            </div>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Form content stays left-aligned -->
            <form method="POST" action="{{ route('login') }}" class="text-left">
                @csrf

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Comic bubble 3 - Password hint -->
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-app-layout>