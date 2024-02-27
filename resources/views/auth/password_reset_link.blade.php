@extends('layouts.guest')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <h3 class="text-center">Password Reset</h3>
            <p class="mt-4">Enter the email address associated with your account and we’ll send you a link to reset your
                password.</p>

            <form action="{{ route('password.email') }}" method="POST">
                @method('POST')
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    @error('email')
                    <small>{{ $errors->first('email') }}</small>
                    @enderror
                </div>

                <button class="btn-main hoverable mt-8" type="submit">Continue</button>
            </form>

            <p class="mt-8 text-center">Don't have an account? <a href="{{ route('register') }}">Sign Up</a> -></p>
        </div>
    </div>
@endsection
