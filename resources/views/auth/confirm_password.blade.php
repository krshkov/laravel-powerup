@extends('layouts.app')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <h3 class="text-center">Confirm Password</h3>

            <form action="{{ route('password.confirm') }}" method="POST">
                @method('POST')
                @csrf

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    <small class="mt-2 ml-2">This is a high value action, please verify to proceed!</small>
                    @error('password')
                    <small>{{ $errors->first('password') }}</small>
                    @enderror
                </div>

                <button class="btn-main hoverable mt-8" type="submit">Continue</button>
            </form>
        </div>
    </div>
@endsection
