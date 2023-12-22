@extends('layout')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="login">
        <div class="login_top">
            <div class="text_page-title">Forgor your password?</div>
            <x-input-error :messages="$errors->get('email')" />

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input id="email" placeholder="Email" class="input_text-field" type="email" name="email" :value="old('email')" required autofocus />
                </div>
            </form>
        </div>
        <div class="login_bottom">
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="input_button">
                    {{ __('I forgor') }}
                </x-primary-button>
            </div>
        </div>
    </div>
    <style>.container { height: 175px; }</style>
@endsection
