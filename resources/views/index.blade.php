@extends('layout.master')
@extends('layout.navbar')

@section('title')
<title>Iter | Dashboard</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
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

                @foreach($destinations as $destination)
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
                    @foreach ($user_categories as $category)
                    <form class="dashboard__categories__container">
                        <div class="dashboard__categories__category">
                            {{ $category->category_name }}
                            <input type="submit" class="dashboard__categories__category__button">
                            <img src="{{ url('/assets/icons/delete.svg') }}" alt=""
                            class="dashboard__categories__delete__icon">
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
            <button class="dashboard__categories__list__button" id="dashboard__categories__list__button">Add new
                category <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0002 15.9166H5.3335M16.0002 26.1389V15.9166V26.1389ZM16.0002 15.9166V5.69443V15.9166ZM16.0002 15.9166H26.6668H16.0002Z"
                        stroke="white" stroke-width="1.33333" stroke-linecap="round" /></svg></button>
        </div>

        <div class="card dashboard__plan">
            <div class="dashboard__header">
                <h2 class="dashboard__title">Your Travel Plan</h2>
                <h4 class="dashboard__subtitle">last updated 1m 13s ago</h3>
            </div>
            <div class="dashboard__plans__list">
                @foreach ($user_destinations as $destination)
                    <div class="dashboard__plans__list__plan">
                        {{$destination->name}}
                    </div>
                @endforeach
            </div>

            @if(!empty($user_destinations))
            <button class="dashboard__plans__list__button">Save <svg width="32" height="32" viewBox="0 0 32 32"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16.0002 15.9166H5.3335M16.0002 26.1389V15.9166V26.1389ZM16.0002 15.9166V5.69443V15.9166ZM16.0002 15.9166H26.6668H16.0002Z"
                        stroke="white" stroke-width="1.33333" stroke-linecap="round" /></svg></button>
            @endif
        </div>
    </div>
    <div class="add-category" id="add-category">
        <div class="add-category__container">
            <form action="/add_category" method ="POST" class="add-category__dropdown">
                @csrf
                <div class="add-category__dropdown__container">
                    <select name="categories" id="add-category__dropdown__select">
                        <option value="">Select a category...</option>

                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <div class="custom__arrow"></div>
                </div>
                <div class="buttons">
                    <input type="submit" value="Add" class="add-category__button">
                    <button type="button" class="add-category__button" id="add-category__cancel">Cancel</button>
                </div>
            </form>
        </div>
        <div class="add-category__overlay"></div>
    </div>
</main>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('js/dashboard.js') }}"></script>
@endsection
