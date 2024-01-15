@extends('layout')

@section('title', $user->username.'\'s profile')
@section('style')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
<div class="profile">
    <div class="top">
        <div id="song_page_back_button_line">
            <a href="/users" class="input_button back_button" id="song_back_button">↩</a>
        </div>
    </div>
    <div class="bottom">
        <div class="flex_left">
            <img class="profile-picture" src="
            @if (file_exists('media/profile_pictures/'.$user->id.'.jpg'))
            {{url('media/profile_pictures/'.$user->id.'.jpg') }}
            @else
            {{url('media/profile_pictures/default.jpg') }}
            @endif
            ">
            <div class="text_username">{{ $user->username }}</div>
        </div>
    </div>
</div>
@endsection