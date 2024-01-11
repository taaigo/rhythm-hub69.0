<nav id="navbar" class="sticky">
    <ul class="nav">
        <li><a class="nav" href="/">Home</a></li>
        <li><a class="nav" href="/songs">Songs</a></li>
        <li><a class="nav" href="/users">Users</a></li>

        @if ( empty(Auth::user()->id) )
            <li style="float:right"><a class="nav" href="/register">Signup</a></li>
            <li style="float:right"><a  class="nav" href="/login">Login</a></li>
        @else
        <li style="float: right"><a class="nav" href="{{ route('logout') }}">Logout</a></li>
        <li style="float: right"><a style="margin-left: 10px; padding-left: 0" class="nav" href="/u/{{ Auth::user()->id }}">
        {{ Auth::user()->username }}</a></li><a href="/u/{{ Auth::user()->id }}"><img class="image_avatar-small-round" src="
            @if (file_exists('media/profile_pictures/'.Auth::user()->id.'.jpg'))
            {{url('media/profile_pictures/'.Auth::user()->id.'.jpg') }}
            @else
            {{url('media/profile_pictures/default.jpg') }}
            @endif
        "></a>
        @endif
    </ul>
</nav>
