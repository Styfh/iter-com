@extends('layout.master')
@extends('layout.navbar')

@section('title')
    <title>Iter | Dashboard</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('section')
<main>
      <div class="dashboard">
        <div class="card dashboard__recommendations">
          <div class="dashboard__header">
            <h2 class="dashboard__title">Recommendations</h2>
            <h4 class="dashboard__subtitle">last updated 25m ago</h3>
          </div>
          <div class="dashboard__recommendations__list">
            <div class="dashboard__recommendations__list__item"></div>
            <div class="dashboard__recommendations__list__item"></div>
            <div class="dashboard__recommendations__list__item"></div>
          </div>
        </div>
        <div class="card dashboard__categories">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Categories</h2>
                <h4 class="dashboard__subtitle">last updated 20s ago</h3>
            </div>
            <div class="dashboard__categories__list">
              <div class="dashboard__list__category dashboard__list__category--1"><p>Cat 1</p></div>
              <div class="dashboard__list__category dashboard__list__category--2"><p>Cat 2</p></div>
              <div class="dashboard__list__category dashboard__list__category--3"><p>Cat 3</p></div>
              <div class="dashboard__list__category dashboard__list__category--4"><p>Cat 4</p></div>
              <div class="dashboard__list__category dashboard__list__category--5"><p>Cat 5</p></div>
              <div class="dashboard__list__category dashboard__list__category--6"><p>Cat 6</p></div>
              <div class="dashboard__list__category dashboard__list__category--7"><p>Cat 7</p></div>
              <div class="dashboard__list__category dashboard__list__category--8"><p>Cat 8</p></div>
              <div class="dashboard__list__category dashboard__list__category--9"><p>Cat 9</p></div>
            </div>
            <button class="dashboard__categories__list__button">Add new category <img src="./icons/plus.svg" alt="plus icon"></button>
        </div>
        <div class="card dashboard__plan">
          <div class="dashboard__header">
            <h2 class="dashboard__title">Your Travel Plan</h2>
            <h4 class="dashboard__subtitle">last updated 1m 13s ago</h3>
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
          <button class="dashboard__plans__list__button">Save <img src="./icons/plus.svg" alt="plus icon"></button>
        </div>
      </div>
    </main>
@endsection