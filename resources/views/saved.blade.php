@extends('layout.master')

@section('title')
    <title>Iter | Saved Plans</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/saved.css')}}">

    <style>
      
    </style>
@endsection

@section('section')
<nav>
      <ul>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/home-icon.png')}}" alt="" />
            <p id="nav__links__text">Home</p></a
          >
        </li>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/saved-plans-icon.png')}}" alt="" />
            <p id="nav__links__text">Saved</p></a
          >
        </li>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/logout-icon.png')}}" alt="" />
            <p id="nav__links__text">Logout</p></a
          >
        </li>
      </ul>
    </nav>
    <main>
      <div class="saved-plans__container">
        <h1 class="saved-plans__title">Saved Travel Plans</h1>
        <div class="saved-plans__grid__container">
          <div class="saved-plans__grid">
            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 1</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 2</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 3</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 4</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 5</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 6</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 7</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 8</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 9</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 10</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 11</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 12</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 13</h3>
              <input type="submit" value="Edit Plan" />
            </form>

            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">Plan 14</h3>
              <input type="submit" value="Edit Plan" />
            </form>
          </div>
        </div>
      </div>
    </main>
@endsection