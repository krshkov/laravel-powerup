@extends('layouts.guest')
@section('content')
    <div>
        <div>
            <h3>Verify Email</h3>
            <p>In order to participate in events and get all the benefits for using BeautyRoom, you need to confirm
                your email address.</p>

            <form action="{{ route('verification.send') }}" method="POST">
                @method('POST')
                @csrf

                <button type="submit">Verify Email Address</button>
            </form>
        </div>
    </div>
@endsection
