@extends('layouts.app')
@section('content')

    <div class="_container">
        <h2 class="mt-28 text-center">Welcome {{ auth()->user()->first_name . " " . auth()->user()->last_name }}</h2>
        <p class="text-center italic">This is your dashboard.</p>

        {{-- Alerts --}}
        <div class="pt-24 pb-40 w-full">
            <div class="mt-10 flex justify-center flex-wrap">
                <div class="m-2 block alert-main">
                    <div class="alert-header">
                        <h4 class="alert-title">Main</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-success">
                    <div class="alert-header">
                        <h4>Success</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-danger">
                    <div class="alert-header">
                        <h4>Danger</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-warning">
                    <div class="alert-header">
                        <h4>Warning</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-info">
                    <div class="alert-header">
                        <h4>Info</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-light">
                    <div class="alert-header">
                        <h4>Light</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
                <div class="m-2 block alert-opposite">
                    <div class="alert-header">
                        <h4>Opposite</h4>
                    </div>
                    <div class="alert-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                            consequuntur,
                            cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                            temporibus
                            tenetur, voluptas!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
