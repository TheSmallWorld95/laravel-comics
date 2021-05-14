@extends('layouts.app')

@section('content')
  <div class="title-container text-uppercase text-white">
    <div class="title">
      current series
    </div>
  </div>
  <section class="main-content-container pt-10 pl-4 pr-4">
    <div class="card-container">
      @foreach ($comics as $comic)
      <div class="card">
        <div class="cover">
          <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="comic-title">
          <h5 class="text-uppercase text-white pt-3 pb-10">{{$comic['title']}}</h5>
        </div>
      </div>
      @endforeach
    </div>
    <div class="more pb-5">
      <button class="text-uppercase text-white" type="button" name="button">load more</button>
    </div>
  </section>
  <section class="marketing">
    <div class="utility-container pt-10 pb-10 pl-6">
      <div class="utility">
        <img src="/img/buy-comics-digital-comics.png" alt="">
        <span class="text-uppercase text-white">digital comics</span>
      </div>
      <div class="utility">
        <img src="/img/buy-comics-merchandise.png" alt="">
        <span class="text-uppercase text-white">dc merchandise</span>
      </div>
      <div class="utility">
        <img src="/img/buy-comics-subscriptions.png" alt="">
        <span class="text-uppercase text-white">subscription</span>
      </div>
      <div class="utility">
        <img src="/img/buy-comics-shop-locator.png" alt="">
        <span class="text-uppercase text-white">comic shop locator</span>
      </div>
      <div class="utility">
        <img class="visa" src="/img/buy-dc-power-visa.svg" alt="">
        <span class="text-uppercase text-white">dc power visa</span>
      </div>
    </div>

  </section>

@endsection
