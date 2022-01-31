@extends('layout.master')
@extends('layout.navbar')

@section('title')
    <title>Iter | Saved Plans</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/saved.css')}}">

    <style>
      
    </style>
@endsection

@section('section')
    <main>
      <div class="saved-plans__container">
        <h1 class="saved-plans__title">Saved Travel Plans</h1>
        <div class="saved-plans__grid__container">
          <div class="saved-plans__grid">

            @if(count($plans))

            @foreach ($plans as $plan)
            <form action="" class="saved-plans__plan">
              <h3 class="saved-plans__plan__name">$plan->plan_name</h3>
              <input type="submit" value="Edit Plan" />
            </form>
            @endforeach

            @else
            <h3>No plans yet..</h3>
            @endif
          </div>
        </div>
      </div>
    </main>
@endsection