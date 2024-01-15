@extends('layout')

@section('title', $user->username.'\'s profile')
@section('style')
<link rel="stylesheet" href="{{ asset('css/user.css') }}">
@endsection

@section('content')
<div class="profile">
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
        <div class="flex_right">
            <a href="/u/edit" style="text-decoration: none"><div class="input_button">Edit Profile</div></a>
        </div>
    </div>
</div>
@endsection