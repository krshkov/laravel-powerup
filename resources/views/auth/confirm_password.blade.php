@extends('layouts.app')
@section('content')
    <div>
        <div>
            <h3>Confirm Password</h3>

            <form action="{{ route('password.confirm') }}" method="POST">
                @method('POST')
                @csrf

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    @error('password')
                    <small>{{ $errors->first('password') }}</small>
                    @enderror
                </div>

                <button type="submit">Continue</button>
            </form>
        </div>
    </div>
@endsection
