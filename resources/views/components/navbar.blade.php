<nav id="navbar" class="sticky">
    <ul>
        <li><a class="nav" href="/">Home</a></li>
        <li><a class="nav" href="/songs">Songs</a></li>

        @if ( empty($session_user->id) )
            <li style="float:right"><a class="nav" href="/register">Signup</a></li>
            <li style="float:right"><a  class="nav" href="/login">Login</a></li>
        @else
            <li></li>
        @endif
    </ul>
</nav>