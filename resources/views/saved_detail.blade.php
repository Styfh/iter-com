@extends('layout.master')

@section('title')
<title>View Saved Plan</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('section')
<nav>
    <ul>
        <li>
            <a href=""><img src="{{ url('/assets/icons/home-icon.png') }}" alt="home icon" />
                <p id="nav__links__text">Home</p>
            </a>
        </li>
        <li>
            <a href=""><img src="{{ url('/assets/icons/saved-plans-icon.png') }}"
                    alt="home icon" />
                <p id="nav__links__text">Saved</p>
            </a>
        </li>
        <li>
            <a href=""><img src="{{ url('/assets/icons/logout-icon.png') }}" alt="home icon" />
                <p id="nav__links__text">Logout</p>
            </a>
        </li>
    </ul>
</nav>

<main>
    <div class="dashboard">
        <div class="card dashboard__recommendations">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Place Name</h2>
            </div>

            <div class="dashboard__recommendations__list">

                @foreach($destinations as $destination)
                    <div class="dashboard__recommendations__list__item">
                        <img src="{{ url('place_images/'.$destination->image_path) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card dashboard__plan">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Your Travel Plan</h2>
            </div>
            <div class="dashboard__plans__list">
                <div class="dashboard__plans__list__plan">Destination 1</div>
                <div class="dashboard__plans__list__plan">Destination 2</div>
                <div class="dashboard__plans__list__plan">Destination 3</div>
                <div class="dashboard__plans__list__plan">Destination 4</div>
                <div class="dashboard__plans__list__plan">Destination 5</div>
                <div class="dashboard__plans__list__plan">Destination 6</div>
                <div class="dashboard__plans__list__plan">Destination 7</div>
                <div class="dashboard__plans__list__plan">Destination 8</div>
                <div class="dashboard__plans__list__plan">Destination 9</div>
                <div class="dashboard__plans__list__plan">Destination 10</div>
                <div class="dashboard__plans__list__plan">Destination 11</div>
                <div class="dashboard__plans__list__plan">Destination 12</div>
                <div class="dashboard__plans__list__plan">Destination 13</div>
                <div class="dashboard__plans__list__plan">Destination 14</div>
                <div class="dashboard__plans__list__plan">Destination 15</div>
                <div class="dashboard__plans__list__plan">Destination 16</div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('js/dashboard.js') }}"></script>
@endsection
