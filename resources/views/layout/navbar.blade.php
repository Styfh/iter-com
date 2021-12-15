@section('navbar')
<nav>
    <a href="/" class = "home-icon"><img src="{{ url('/assets/icons/home-icon.png')}}" alt=""></a>
    <a href="/saved" class = "saved-icon"><img src="{{ url('/assets/icons/saved-plans-icon.png')}}" alt=""></a>
    <a href="/logout" class = "logout-icon"><img src="{{ url('/assets/icons/logout-icon.png')}}" alt=""></a>
</nav>
@endsection