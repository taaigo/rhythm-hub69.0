<a href="/songs/{{$song->id}}"><div class="flex_element">
    <img src="{{ asset('media/songcovers/'.$song->id.'.jpg') }}">  
    <div class="song_header">
        <div class="song_info">
            <div class="song_title">{{$song->title}}</div>
            <div class="song_artist">by {{$song->artist}}</div>
        </div>
        <div class="song_bpm">{{$song->bpm}}bpm</div>
    </div>
</div></a>