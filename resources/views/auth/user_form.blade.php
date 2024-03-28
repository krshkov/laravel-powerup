@extends('layouts.app')
@section('content')
    <div class="_container flex justify-center items-center color-main">
        <div class="max-w-form w-full py-32">
            <div class="flex justify-between items-center">
                <h3>Update User</h3>

            </div>
            <form action="{{ route('user.update') }}" method="POST">
                @method('PUT')
                @csrf

                <div class="input-group">
                    <label for="check_password">Confirm Password</label>
                    <input type="password" name="check_password" id="check_password" required>
                    <small class="color-main font-bold">To proceed you must confirm your password.</small>
                    <small class="color-main font-bold">
                        If you are registered using third party app, please update your password by clicking
                        <a href="{{ route('password.request.redirect') }}" class="color-info">here</a>.
                    </small>
                    @error('check_password')
                    <small>{{ $errors->first('check_password') }}</small>
                    @enderror
                </div>

                <div class="border-t border-1 border-main border-solid mt-16 mb-8 rounded-2xl"></div>

                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" required>
                    @error('name')
                    <small>{{ $errors->first('name') }}</small>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" value="{{ $user->phone }}">
                    @error('phone')
                    <small>{{ $errors->first('phone') }}</small>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" required>
                    @error('email')
                    <small>{{ $errors->first('email') }}</small>
                    @enderror
                </div>

                <div class="border-t border-1 border-main border-solid mt-16 mb-8 rounded-2xl"></div>

                <div class="input-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" id="password">
                    @error('password')
                    <small>{{ $errors->first('password') }}</small>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation">
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

                <div class="flex items-center justify-between mt-6">
                    <button class="btn-main hoverable" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
