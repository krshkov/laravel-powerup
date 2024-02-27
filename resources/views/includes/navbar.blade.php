<nav class="w-full flex justify-between items-centers p-5">
    <div class="flex items-center">
        <img src="{{ asset('logo.svg') }}" width="60px" alt="Logo">
    </div>

    <div class="flex items-center">
        <ul class="flex">
            <li class="px-10 color-main font-bold"><a href="{{ route('home') }}">Home</a></li>
            <li class="px-10 color-main font-bold"><a href="{{ route('components') }}">Components</a></li>
            <li class="px-10 color-main font-bold modal-on modal-of-main"><a href="#">Modal Up</a></li>
            <li class="px-10 color-main font-bold"><a href="#">Link 4</a></li>
        </ul>
    </div>

    <div class="flex items-center">
        <strong class="px-10">{{ auth()->user()->first_name . " " . auth()->user()->last_name }}</strong>
        <form class="px-10" action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf

            <button type="submit" class="btn-outline-danger">Logout</button>
        </form>
    </div>
</nav>
