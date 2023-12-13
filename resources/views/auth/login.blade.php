@extends('layout')

@section('style')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <form class="login" action="">
        <div class="text_page-title">You should login... NOW!!</div>
        <div class="login_top">
            <input class="input_text-field" type="text" placeholder="Username">
            <input class="input_text-field" type="password" placeholder="Password">    
        </div>
        <div class="login_bottom">
            <input class="input_button" type="submit" value="Login">
        </div>
</div>
<style>.container { height: 245px; }</style>
@endsection