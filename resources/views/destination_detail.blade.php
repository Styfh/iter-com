@extends('layout.master')
@extends('layout.navbar')

@section('title')
<title>Iter | Destination</title>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('css/destination_detail.css') }}">
@endsection

@section('section')
<div class="recommendation-detail">
        <div class="recommendation-detail__container">
            <img src="{{ url('place_images/'.$destination->image_path) }}" alt="" class="dest-img">

            <p class="recommendation-detail__name">
                {{ $destination->name }}
            </p>
            <div class="recommendation-detail__categories">
                <p class="recommendation-detail__categories__title">Categories</p>
                <ul class="recommendation-detail__categories__list">

                    @foreach ($categories as $category)
                    <li>
                        {{ $category->getCategory->category_name }}
                    </li>
                    @endforeach

                </ul>
            </div>
            <form action="/add/{{ $destination->id }}" class="recommendation-detail__add" method="POST">
                @csrf
                <input type="submit" value="Add to plan" id="recommendation-detail__add__button">    
            </form>
        </div>
</div>
@endsection