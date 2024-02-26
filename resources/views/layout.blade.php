<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (empty($_COOKIE['theme']))
        @php
            setcookie("theme", "gnome-dark", time()+86400*750)
        @endphp
    @endif
    @yield('head')
    <link rel="stylesheet" href="{{ asset('css/'.$_COOKIE['theme'].'/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'.$_COOKIE['theme'].'/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'.$_COOKIE['theme'])}}/@yield('style')">
    <title>@yield('title')</title>
</head>
<body>
    <x-navbar />
    <div class="tripple-section-container">
        <div class="text_page-title">@yield('container-title')</div>
        <div class="container">
            <div class="inner_container">
                @yield('content')
            </div>
        </div>
        @yield('pagination')

    </div>


<form method="POST" action="{{ route('edit.theme') }}">
    @csrf
    <label for="theme">Theme:</label>
    <select id="theme" name="theme" onchange="this.form.submit()">
      <option value="gnome-dark" @if ($_COOKIE['theme'] === "gnome-dark") selected @endif>Gnome dark</option>
      <option value="gnome-light" @if ($_COOKIE['theme'] === "gnome-light") selected @endif>Gnome light</option>
    </select> <noscript><input type="submit" value="submit"></noscript>
</form>
