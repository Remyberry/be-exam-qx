<x-app-layout>
    <x-auth-card class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md mx-auto">
        <x-slot name="logo">
            <h1 class="text-3xl font-extrabold text-gray-800 text-center mb-6">
                Admin Login
            </h1>
        </x-slot>

        <x-auth-session-status class="mb-4 text-sm text-green-600" :status="session('status')" />

        <x-auth-validation-errors class="mb-4 text-sm text-red-600" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf

            <div>
                <x-label for="email" :value="__('Email')" class="text-sm text-gray-700 font-medium" />
                <x-input
                    id="email"
                    class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-gray-500 focus:ring-gray-500 shadow-sm"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                />
            </div>

            <div>
                <x-label for="password" :value="__('Password')" class="text-sm text-gray-700 font-medium" />
                <x-input
                    id="password"
                    class="mt-1 block w-full rounded-lg border-gray-300 bg-white focus:border-gray-500 focus:ring-gray-500 shadow-sm"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-gray-600 shadow-sm focus:border-gray-300 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
                        name="remember"
                    >
                    <span class="ml-2 text-sm text-gray-600">
                        {{ __('Remember me') }}
                    </span>
                </label>

                @if (Route::has('password.request'))
                    <a
                        class="text-sm text-gray-600 hover:underline hover:text-gray-800"
                        href="{{ route('password.request') }}"
                    >
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div>
                <x-button class="w-full justify-center bg-gray-800 hover:bg-gray-900 text-white font-semibold py-2 px-4 rounded-md shadow-md transition">
                    {{ __('LOG IN') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>