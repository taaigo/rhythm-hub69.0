@extends('users.layout')

@section('title', $user->username.'\'s profile')
@section('style')
user.css
@endsection

@section('content')
<div class="container">
    <div class="inner_container">
        <div class="profile">

            @if (!$isme)
            <div class="top">
                <div id="song_page_back_button_line">
                    <a href="/users" class="input_button back_button" id="song_back_button">↩</a>
                </div>
            </div>
            @endif

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

                @if ($isme)
                <div class="flex_right">
                    <a href="/u/edit" style="text-decoration: none"><div class="input_button">Edit Profile</div></a>
                </div>
                @endif

            </div>
            @if (!$user->description == NULL)
                <div class="aboutme-container">
                    <div class="text_sub-title">About me:</div>
                    <div id="profile-aboutme" class="aboutme-content text_sub">{!! $user->description !!}</div>
                </div>
        @endif
        </div>
        @endsection
    </div>
</div>
