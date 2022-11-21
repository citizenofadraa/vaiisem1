<div class="topnav">
    <a href="/">Hlavná stránka</a>
    <a href="index">Index</a>
    @guest
        <a href="login" style="float:right">Login</a>
        <a href="register" style="float:right">Register</a>
    @endguest
    <div class="logoutForm">
        <form method="POST" action="{{ route('logout') }}">
            @csrf @auth<button id="banan" type="submit">Logout</button>
            <a style="float:right" href="update">{{Auth::user()->name}}</a>@endauth
        </form>
    </div>

</div>
