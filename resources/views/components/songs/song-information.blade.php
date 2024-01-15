<div class="song_information_box">
    <div class="song_top">
        <img class="song_image" src="{{ asset('media/songcovers/'.$song->id.".jpg") }}">
        <div class="input_button" style="margin: 10px;">Cheer! {{$song->cheers}}</div>
    </div>
    <div class="text_page-title">{{$song->title}}</div>
    <div class="text_sub">by {{$song->artist}}</div>
    <x-usercard :username="$username" :song="$song" />
    @if (file_exists("media/song-audio/".$song->id.".flac"))
    <div class="song_audio-card">
        <audio id="audio-player" src="{{ asset('media/song-audio/'.$song->id.'.flac') }}"></audio>
        <div class="song_audio-player-container">
            <button id="play-button" class="input_button" onclick="play_song()">Play</button>
        </div>
    </div>
@else
<div  class="text_sub">There is no audio avalible for this song.</div>
@endif