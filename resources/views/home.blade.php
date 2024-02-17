@extends('layouts.app')
@section('content')

    <div>
        <h1>Welcome {{ auth()->user()->first_name . " " . auth()->user()->last_name }}</h1>
        <p>This is your dashboard.</p>
    </div>

@endsection
