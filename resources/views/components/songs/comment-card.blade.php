@foreach ($comments as $comment)
<div class="comment_content">
    <div id="head">
        <div id="user">
            <img class="comment_user_image" src="
            @if (file_exists('media/profile_pictures/'.$comment->user.'.jpg'))
            {{ url('media/profile_pictures'.$comment->user) }}
            @else
            {{url('media/profile_pictures/default.jpg') }}
            @endif
            ">
            <div class="username">{{$comment->username}}</div>
        </div>
        <div id="date">{{$comment->created_at}}</div>
    </div>
    <div id="content">
        {{$comment->content}}
    </div>
</div>
@endforeach