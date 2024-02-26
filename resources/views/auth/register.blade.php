@extends('layout')

@section('style')
auth.css
@endsection

@section('content')
    <form class="login" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="text_page-title">Register... NOW!!</div>
        <x-input-error :messages="$errors->get('username')" class="text_error" />
        <x-input-error :messages="$errors->get('password')" class="text_error" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="text_error" />
        <x-input-error :messages="$errors->get('email')" class="text_error" />

        <div class="login_top">
            <!-- Name -->
            <div>
                <x-text-input id="username" placeholder="Username" class="input_text-field" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" placeholder="Email" class="input_text-field" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="input_text-field" placeholder="Password"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" placeholder="Repeat Password" class="input_text-field"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />
            </div>

        </div>
        <div class="login_bottom">
            <div class="flex items-center justify-end vertical-center mt-4">
                <a class="text_sub" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            <x-primary-button class="input_button">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
@endsection
