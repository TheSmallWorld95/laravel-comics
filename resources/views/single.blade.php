@extends('layouts.app')

@section('content')
  <section>
    <div class="divider">

    </div>
  </section>
  <section class="comic-details">
    <div class="comic-thumb">
      <img src="{{$comic['thumb']}}" alt="">
      <h6 class="text-uppercase text-white">comic book</h6>
      <span class="text-uppercase text-white text-center">view gallery</span>
    </div>
  </section>
  <section class="info pt-15">
    <div class="info-container">
      <h2 class="text-uppercase pb-5">{{ $comic['title'] }}</h2>
      <div class="price-container text-white">
        <div class="price">
          <span>U.S. Price:</span> {{ $comic['price'] }}
        </div>
        <div class="availability-container">
          <div class="availability">
            <span class="text-uppercase">available</span>
          </div>
          <a href="#">Check Availability <i class="fas fa-caret-down"></i></a>
        </div>
      </div>
      <div class="description pt-5 pb-15">
        <p> {{ $comic['description'] }}</p>
      </div>
    </div>
    <div class="advertisement pl-10 ">
      <h4 class="text-uppercase">advertisement</h4>
      <img src="/img/adv.jpg" alt="">
    </div>
  </section>
@endsection
