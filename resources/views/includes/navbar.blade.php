<nav class="w-full justify-between p-5 hidden md:flex">
    <div class="flex items-center">
        <img src="{{ asset('logo.svg') }}" class="max-w-none" width="40px" alt="Logo">
    </div>
    <div class="flex items-center">
        <ul class="flex">
            <li class="lg:px-10 px-5 color-main font-bold"><a href="{{ route('home') }}">Home</a></li>
            <li class="lg:px-10 px-5 color-main font-bold"><a href="{{ route('components') }}">Components</a></li>
            <li class="lg:px-10 px-5 color-main font-bold modal-on modal-of-main"><a href="#">Modal Up</a></li>
            <li class="lg:px-10 px-5 color-main font-bold"><a href="#">Link 4</a></li>
        </ul>
    </div>

    <div class="flex items-center">
        <strong class="lg:px-10 px-3">{{ auth()->user()->first_name . " " . auth()->user()->last_name }}</strong>
        <form class="lg:pl-10 pl-3" action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf

            <button type="submit" class="btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
<nav class="md:hidden">
    <div class="flex items-center justify-between p-5 bg-main">
        <div class="flex items-center">
            <img src="{{ asset('logo.svg') }}" width="40px" alt="Logo">
        </div>
        <div class="flex items-center">
            <button id="menu-burger"><x-vaadin-menu width="20px"/></button>
        </div>
    </div>

    <div id="mobile-nav" class="hidden bg-main h-[calc(100vh-70px)] border-t border-black flex-col justify-between">
        <ul>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="{{ route('home') }}">Home</a></li>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="{{ route('components') }}">Components</a></li>
            <li class="text-xl px-10 color-black font-bold modal-on modal-of-main pt-6"><a href="#">Modal Up</a></li>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="#">Link 5</a></li>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="#">Link 6</a></li>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="#">Link 7</a></li>
            <li class="text-xl px-10 color-black font-bold pt-6"><a href="#">Link 8</a></li>
        </ul>
        <div class="flex justify-between p-4 py-8">
            <button class="btn-opposite">Info</button>
            <button class="btn-warning">Report</button>
        </div>
    </div>
</nav>
