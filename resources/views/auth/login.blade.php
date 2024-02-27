@extends('layouts.guest')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <h3 class="text-center">Sign In</h3>

            <form action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    @error('email')
                    <small>{{ $errors->first('email') }}</small>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                    <small>{{ $errors->first('password') }}</small>
                    @enderror
                </div>

                <div class="input-inline-group">
                    <input type="checkbox" name="remember" id="remember" checked>
                    <label for="remember">Remember me</label>
                    @error('remember')
                    <small>{{ $errors->first('remember') }}</small>
                    @enderror
                </div>

                <div class="flex items-center gap-12 pt-4 justify-between">
                    <button class="btn-main hoverable" type="submit">Sign in</button>
                    <a href="{{ route('password.request') }}"><h6>Forgot Password?</h6></a>
                </div>
            </form>

            <p class="mt-4 text-center">------------------- OR -------------------</p>

            <div class="mt-4 flex items-center justify-center gap-8">
                <a href="#"><x-akar-google-fill width="24px"/></a>
                <span>|</span>
                <a href="#"><x-vaadin-facebook width="24px"/></a>
            </div>

            <p class="text-center mt-4">Don't have an account? <a href="{{ route('register') }}" class="font-bold">Sign Up</a> <x-akar-arrow-right-thick class="inline" width="20px"/></p>
        </div>
    </div>
@endsection
