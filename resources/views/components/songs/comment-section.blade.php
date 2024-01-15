<form action="/songs/{{ $song->id }}" method="post">
    @csrf
    <div class="comment_section">
        <div class="input_comment" id="commentsong">
            @if (!empty(Auth::user()->id))
                    <div class="comment-input-field">
                        <input class="input_text-field" type="text" name="comment" placeholder="Write a comment">
                        <input class="input_button" type="submit" value="Post">
                    </div>
                    <div class="comments">
                        <x-songs.comment-card :comments="$comments" />
                    </div>
            @else
                    <div class="text_page-title">You must be logged in to comment</div>
            @endif
        </div>
    </div>
</form>
    