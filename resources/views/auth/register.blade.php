@extends("layouts.app")

@section("title", "Register")

@section("content")

    <guest-layout>
        <auth-card>
            <slot name="logo">
                <a href="/">
                    <application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </slot>

            <!-- Validation Errors -->
            <auth-validation-errors class="mb-4" errors="{{$errors}}" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class=labels>
                    <!-- Name -->
                    <div>
                        <label for="name">Name</label>

                        <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <label for="email">Email</label>

                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">Password</label>

                        <input id="password" class="block mt-1 w-full"
                               type="password"
                               name="password"
                               required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation">Confirm password</label>

                        <input id="password_confirmation" class="block mt-1 w-full"
                               type="password"
                               name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <button class="ml-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </auth-card>
    </guest-layout>

@endsection
