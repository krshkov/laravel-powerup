@extends('layouts.guest')
@section('content')

    <div class="_container">
        <h2>Welcome to A must, simplistic, powerful, one and only</h2>
        <h1>{{ config('app.name') }}</h1>

        <div>
            <a href="{{ route("login") }}">
                <button>Login</button>
            </a>
            <a href="{{ route("register") }}">
                <button>Register</button>
            </a>
        </div>
    </div>

@endsection
