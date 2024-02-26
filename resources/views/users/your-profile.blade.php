@extends('layout')

@section('title', $user->username.'\'s profile')
@section('style')
user.css
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
@if (!$user->description == NULL)
    <div class="aboutme-section">
        <div class="aboutme-container">
            <div class="text_sub-title">About me</div>
            <div id="profile-aboutme" class="aboutme-content text_sub">{{ $user->description }}</div>
        </div>
    </div>
@endif
</div>
@endsection
