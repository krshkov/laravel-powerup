@extends('layouts.guest')
@section('content')

    <div class="_container text-center">
        <h3 class="mt-32">Welcome to <span class="color-main">A</span> must, simplistic, <span class="color-main">powerful</span>,
            one and only</h3>
        <h1 class="mt-8 color-main">{{ config('app.name') }}</h1>

        <div class="mt-8">
            <a href="{{ route("login") }}">
                <button class="btn-main hoverable">Login</button>
            </a>
            <a href="{{ route("register") }}">
                <button class="btn-outline-main hoverable">Register</button>
            </a>
        </div>
    </div>

@endsection
