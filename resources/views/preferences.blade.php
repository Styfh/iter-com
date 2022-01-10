@extends('layout.master')

@section('title')
    <title>Iter | Preferences</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/preferences.css')}}">
@endsection

@section('section')
    <main>
      <h1>Let's get to know <span id="blue">you</span> better</h1>

      <form action="/preferences" method="POST">
        @csrf_field
        <label for="preferences" class="form__input__label"
          >What type of places do you like?</label
        >
        <div class="form__container">
          <select name="preferences" id="form__input__select">
            <option value="">Select an option&hellip;</option>

            @foreach ($categories as $category)
            <option values ="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
          </select>
          <div class="custom__arrow"></div>
        </div>
        <input type="submit" id="add" value="Add" />
      </form>

      <section class="choosen">
        <div class="choosen__grid">
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Open Spaces
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Hot
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Cold
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Culture
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Historical
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
          <form class="choosen__preference__container">
            <div class="choosen__preference">
              Sports
              <input type="submit" class="choosen__preference__button">
            </div>
          </form>
        </div>
      </section>

      <a class="continue" id="continue" href="../Dashboard/dashboard.html">
        continue >>
      </a>
    </main>
@endsection