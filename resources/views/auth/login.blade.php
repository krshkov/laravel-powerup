@extends('layouts.guest')
@section('content')
    <div>
        <div>
            <h3>Sign In</h3>

            <form action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    @error('email')
                    <small>{{ $errors->first('email') }}</small>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                    <small>{{ $errors->first('password') }}</small>
                    @enderror
                </div>

                <div>
                    <input type="checkbox" name="remember" id="remember" checked>
                    <label for="remember">Remember me</label>
                    @error('remember')
                    <small>{{ $errors->first('remember') }}</small>
                    @enderror
                </div>

                <div>
                    <button type="submit">Sign in</button>
                    <a href="{{ route('password.request') }}"><h6>Forgot Password?</h6></a>
                </div>
            </form>

            <p>------------------- OR -------------------</p>

            <div>
                <a href="#">Google</a>
                <span>|</span>
                <a href="#">Facebook</a>
            </div>

            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a> -></p>
        </div>
    </div>
@endsection
