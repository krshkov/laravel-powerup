@extends('layouts.guest')
@section('content')
    <div class="_container flex justify-center items-center mt-12 color-main">
        <div class="max-w-form w-full">
            <h3 class="text-center">Verify Email</h3>
            <p class="mt-8">In order to participate in events and get all the benefits for using {{ config('app.name', 'Laravel Powerup') }}, you need to
                confirm your email address.</p>

            <form action="{{ route('verification.send') }}" method="POST">
                @method('POST')
                @csrf

                <button class="btn-main hoverable mt-8 w-full" type="submit">Verify Email Address</button>
            </form>
        </div>
    </div>
@endsection
