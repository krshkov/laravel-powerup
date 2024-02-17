@extends('layouts.guest')
@section('content')
    <div>
        <div>
            <h3>Password Reset</h3>
            <p>Enter the email address associated with your account and we’ll send you a link to reset your
                password.</p>

            <form action="{{ route('password.email') }}" method="POST">
                @method('POST')
                @csrf

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    @error('email')
                    <small>{{ $errors->first('email') }}</small>
                    @enderror
                </div>

                <button type="submit">Continue</button>
            </form>

            <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a> -></p>
        </div>
    </div>
@endsection
