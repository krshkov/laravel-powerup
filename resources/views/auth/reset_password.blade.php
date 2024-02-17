@extends('layouts.guest')
@section('content')
    <div>
        <div>
            <h3>Password Reset</h3>
            @if($errors->any())
                {{ dump($errors) }}
            @endif
            <form action="{{ route('password.update') }}" method="POST">
                @method('POST')
                @csrf

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

                <input type="hidden" name="email" value="{{ $request->email }}">
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <button type="submit">Continue</button>
            </form>
        </div>
    </div>
@endsection
