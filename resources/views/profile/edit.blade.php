@extends('layout')

@section('title', $user->username.'\'s profile')
@section('container-title', 'User Settings')
@section('style')
<link rel="stylesheet" href="{{ asset('css/user-settings.css') }}">
@endsection

@section('content')
<div id="settings-container">
    <div id="song_page_back_button_line">
        <a href="/u" class="input_button back_button" id="song_back_button">↩</a>
    </div>
    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
    @include('profile.partials.delete-user-form')
</div>
@endsection