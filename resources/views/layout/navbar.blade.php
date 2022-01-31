@section('navbar')
<nav>
    <ul>
        <li>
            <a href="/"><img src="{{ url('/assets/icons/home-icon.png') }}" alt="home icon" />
                <p id="nav__links__text">Home</p>
            </a>
        </li>
        <li>
            <a href="/saved"><img src="{{ url('/assets/icons/saved-plans-icon.png') }}"
                    alt="home icon" />
                <p id="nav__links__text">Saved</p>
            </a>
        </li>
        <li>
            <a href="/logout"><img src="{{ url('/assets/icons/logout-icon.png') }}" alt="home icon" />
                <p id="nav__links__text">Logout</p>
            </a>
        </li>
    </ul>
</nav>
@endsection