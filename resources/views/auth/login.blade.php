@extends('layout')

@section('style')
auth.css
@endsection

@section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="login" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text_page-title">You should login... NOW!!</div>
        <x-input-error :messages="$errors->get('username')" class="text_error" />
        <x-input-error :messages="$errors->get('password')" class="text_error" />

        <div class="login_top">

            <!-- Email Address -->
            <div>
                <x-text-input id="username" placeholder="Username" class="input_text-field" type="text" name="username" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="input_text-field" placeholder="Password"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="text_sub">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="rember ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
        </div>

        <div class="login_bottom">
            <div class="flex items-center justify-end vertical-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text_sub" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <x-primary-button class="input_button">
                    {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
    <style>.container { height: 300px; }</style>
@endsection
