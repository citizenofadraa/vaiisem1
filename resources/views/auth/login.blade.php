@extends("layouts.app")

@section("title", "Login")

@section("content")

    <div class="logContainer">
        <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->

            <div class=emailDiv>
                <label for="email"> E-mail</label>

                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <!-- Password -->
            <div class=passwordDiv>
                <label for="password"> Password</label>

                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class=rememberDiv>
                <label for="remember_me">
                    <input id=" remember_me" type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
            </div>

            <div class=forgotDiv>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <button id=LogIn>
                    Log in
                </button>
            </div>

        </form>
    </div>

@endsection
