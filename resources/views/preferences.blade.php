@extends('layout.master')

@section('title')
<title>Iter | Preferences</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/preferences.css') }}">
@endsection

@section('section')
<main>
    <h1>Let's get to know <span id="blue">you</span> better</h1>

    <form action="/preferences" method="POST">
        @csrf
        <label for="preferences" class="form__input__label">What type of places do you like?</label>
        <div class="form__container">
            <select name="preferences" id="form__input__select">
                <option value="">Select an option&hellip;</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
            <div class="custom__arrow"></div>
        </div>
        <input type="submit" id="add" value="Add" />
    </form>

    <section class="choosen">
        @foreach($user_categories as $category)
            <form class="choosen__preference__container" action="/preferences/{{ Auth::user()->id }}/{{ $category->category_id }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="choosen__preference">
                    {{ $category->getCategory->category_name }}
                    <input type="submit" class="choosen__preference__button">
                </div>
            </form>
        @endforeach
    </section>

    <a class="continue" id="continue" href="../Dashboard/dashboard.html">
        continue >>
    </a>
</main>
@endsection
