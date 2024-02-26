<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/'.$_COOKIE['theme'].'/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/'.$_COOKIE['theme'].'/song.css') }}">
    <script src="{{ asset('js/songs/playsong.js') }}"></script>
    <title>Document</title>
</head>
<body>
    <div class="center-everything">
        <div class="container">
            <div id="song_page_back_button_line">
                <a href="/songs" class="input_button back_button" id="song_back_button">↩</a>
            </div>
            <x-songs.song-information :username="$username" :song="$song" />
        </div>
    </div>
        <div class="container">
            <x-songs.comment-section :comments="$comments" :song="$song" />
        </div>
        <div class="container paginator_container">
            {{ $comments->links('vendor.pagination.default') }}
        </div>
    </div>
</body>
</html>
