@extends('layouts.guest')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <h3>Password Reset</h3>
            @if($errors->any())
                {{ dump($errors) }}
            @endif
            <form action="{{ route('password.update') }}" method="POST">
                @method('POST')
                @csrf

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

                <input type="hidden" name="email" value="{{ $request->email }}">
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <button class="btn-main hoverable mt-8" type="submit">Continue</button>
            </form>
        </div>
    </div>
@endsection
