@extends('layouts.guest')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <div class="flex justify-between items-center">
                <h3>Sign Up</h3>
                <a href="{{ route('login') }}"><p>Sign In</p></a> {{-- p-lg [18px] --}}
            </div>
            <form action="{{ route('register') }}" method="POST">
                @method('POST')
                @csrf
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    @error('name')
                    <small>{{ $errors->first('name') }}</small>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone">
                    @error('phone')
                    <small>{{ $errors->first('phone') }}</small>
                    @enderror
                </div>

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

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                    @error('password_confirmation')
                    <small>{{ $errors->first('password_confirmation') }}</small>
                    @enderror
                </div>

                <div class="mt-4">
                    <input type="checkbox" name="termsAccepted" id="termsAccepted" value=1 checked required>
                    <label for="termsAccepted">I have accepted the <a href="#">terms and conditions</a></label>
                    @error('termsAccepted')
                    <small>{{ $errors->first('termsAccepted') }}</small>
                    @enderror
                </div>

                <div class="mt-2">
                    <input type="checkbox" name="subscribe" id="subscribe" value=1 checked>
                    <label for="subscribe">I want to subscribe to the newsletter</label>
                    @error('subscribe')
                    <small>{{ $errors->first('subscribe') }}</small>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button class="btn-main hoverable" type="submit">Sign up</button>
                    <a href="{{ route('password.request') }}"><h6>Forgot Password?</h6></a>
                </div>

            </form>

            <p class="mt-4 text-center">------------------- OR -------------------</p>

            <div class="mt-4 flex items-center justify-center gap-8">
                <a href="{{ route('socialite.redirect', 'google') }}"><x-akar-google-fill width="24px"/></a>
                <span>|</span>
                <a href="{{ route('socialite.redirect', 'facebook') }}"><x-vaadin-facebook width="24px"/></a>
                <span>|</span>
                <a href="{{ route('socialite.redirect', 'github') }}"><x-akar-github-fill width="24px"/></a>
            </div>

            <p class="mt-4 text-center">Already have an account? <a class="font-bold" href="{{ route('login') }}">Sign In</a> <x-akar-arrow-right-thick class="inline" width="20px"/></p>
        </div>
    </div>
@endsection
