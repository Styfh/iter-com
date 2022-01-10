@extends('layout.master')

@section('title')
    <title>Iter | Dashboard</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('section')
  <nav>
      <ul>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/home-icon.png')}}" alt="home icon" />
            <p id="nav__links__text">Home</p></a
          >
        </li>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/saved-plans-icon.png')}}" alt="home icon" />
            <p id="nav__links__text">Saved</p></a
          >
        </li>
        <li>
          <a href=""
            ><img src="{{ url('/assets/icons/logout-icon.png')}}" alt="home icon" />
            <p id="nav__links__text">Logout</p></a
          >
        </li>
      </ul>
    </nav>

    <main>
      <div class="dashboard">
        <div class="card dashboard__recommendations">
          <div class="dashboard__header">
            <h2 class="dashboard__title">Recommendations</h2>
            <h4 class="dashboard__subtitle">last updated 25m ago</h3>
          </div>

          <div class="dashboard__recommendations__list">

            @foreach ($destinations as $destination)
            <div class="dashboard__recommendations__list__item">
              <img src="{{ url('place_images/'.$destination->image_path) }}" alt="">
            </div>
            @endforeach
          </div>
        </div>

        <div class="card dashboard__categories">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Categories</h2>
                <h4 class="dashboard__subtitle">last updated 20s ago</h3>
            </div>
            <div class="dashboard__categories__grid__container">
              <div class="dashboard__categories__list">
                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>
                
                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>
                
                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>

                <form class="dashboard__categories__container">
                  <div class="dashboard__categories__category">
                    Cat 1
                    <input type="submit" class="dashboard__categories__category__button">
                    <img src="{{ url('/assets/icons/delete.svg') }}" alt="" class="dashboard__categories__delete__icon">
                  </div>
                </form>
              </div>
            </div>
            <button class="dashboard__categories__list__button">Add new category <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M16.0002 15.9166H5.3335M16.0002 26.1389V15.9166V26.1389ZM16.0002 15.9166V5.69443V15.9166ZM16.0002 15.9166H26.6668H16.0002Z" stroke="white" stroke-width="1.33333" stroke-linecap="round"/></svg></button>
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
          <button class="dashboard__plans__list__button">Save <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.0002 15.9166H5.3335M16.0002 26.1389V15.9166V26.1389ZM16.0002 15.9166V5.69443V15.9166ZM16.0002 15.9166H26.6668H16.0002Z" stroke="white" stroke-width="1.33333" stroke-linecap="round"/></svg></button>
        </div>
      </div>
      <div class="add-category">
        <div class="add-category__card"></div>
        <div class="add-category__overlay"></div>
      </div>
    </main>
@endsection