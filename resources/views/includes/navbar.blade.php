<nav>
    <div>
        <img src="{{ asset('logo.svg') }}" width="60px" alt="Logo">
    </div>

    <div>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
        </ul>
    </div>

    <div>
        <strong>{{ auth()->user()->first_name . " " . auth()->user()->last_name }}</strong>
        <form action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf

            <button type="submit">Logout</button>
        </form>
    </div>
</nav>
