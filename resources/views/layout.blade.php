<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @yield('style')
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
</body>
</html>
