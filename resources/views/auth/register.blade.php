@extends('layouts.guest')
@section('content')
    <div>
        <div>
            <div>
                <h3>Sign Up</h3>
                <a href="{{ route('login') }}"><p>Sign In</p></a> {{-- p-lg [18px] --}}
            </div>
            <form action="{{ route('register') }}" method="POST">
                @method('POST')
                @csrf

                <div>
                    <div>
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" required>
                        @error('firstName')
                        <small>{{ $errors->first('firstName') }}</small>
                        @enderror
                    </div>
                    <div>
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" required>
                        @error('lastName')
                        <small>{{ $errors->first('lastName') }}</small>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" required>
                    @error('phone')
                    <small>{{ $errors->first('phone') }}</small>
                    @enderror
                </div>

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
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                    @error('password_confirmation')
                    <small>{{ $errors->first('password_confirmation') }}</small>
                    @enderror
                </div>

                <div>
                    <input type="checkbox" name="termsAccepted" id="termsAccepted" value=1 required>
                    <label for="termsAccepted">I have accepted the <a href="#">terms and conditions</a></label>
                    @error('termsAccepted')
                    <small>{{ $errors->first('termsAccepted') }}</small>
                    @enderror
                </div>

                <div>
                    <input type="checkbox" name="subscribe" id="subscribe" value=1 checked>
                    <label for="subscribe">I want to subscribe to the newsletter</label>
                    @error('subscribe')
                    <small>{{ $errors->first('subscribe') }}</small>
                    @enderror
                </div>

                <div>
                    <button type="submit">Sign up</button>
                    <a href="{{ route('password.request') }}"><h6>Forgot Password?</h6></a>
                </div>

            </form>

            <p>------------------- OR -------------------</p>

            <div>
                <a href="#">Google</a>
                <span>|</span>
                <a href="#">Facebook</a>
            </div>

            <p>Already have an account? <a href="{{ route('login') }}">Sign In</a> -></p>
        </div>
    </div>
@endsection
