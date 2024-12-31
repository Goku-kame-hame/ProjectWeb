@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});" >
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">About Us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>About</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
      <div class="one-half ftco-animate">
          <div class="overlap">
          <div class="heading-section ftco-animate ">
              <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Story</h2>
          </div>
          <div>
                    <p>Welcome!</p>
                    <p>to our cozy neighborhood coffee shop where every cup is crafted with care and passion. Nestled in the heart of the community, we pride ourselves on serving the finest coffee made from ethically sourced beans, roasted to perfection.</p>
                </div>
            </div>
      </div>
  </section>
@endsection