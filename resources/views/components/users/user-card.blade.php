<a href="/u/{{$user->id}}"><div class="flex_element">
    <div class="image_gradient">
        <img src="
        @if (file_exists('media/profile_pictures/'.$user->id.'.jpg'))
        {{url('media/profile_pictures/'.$user->id.'.jpg') }}
        @else
        {{url('media/profile_pictures/default.jpg') }}
        @endif
        ">  
    </div>
    <div class="user_header">
        <div class="user_info">
            <div class="user_username">{{$user->username}}</div>
        </div>
        <div class="user_timestamp">User created on {{$user->created_at->toDateString()}}</div>
    </div>
</div></a>