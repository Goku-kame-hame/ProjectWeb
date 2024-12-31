@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">The Best Coffee Testing Experience</h1>
            <p class="mb-4 mb-md-5">Sip, Smile, Repeat.</p>
            <p><a href="{{route('products.menu')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{route('products.menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url({{asset('assets/images/bg_2.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome</span>
            <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
            <p class="mb-4 mb-md-5">The warm hug we need.</p>
            <p><a href="{{route('products.menu')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{route('products.menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>

        </div>
      </div>
    </div>

  </section>

  <section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>Contact Us</h3>
                            <p>+62 812-1327-6422</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Cikarang Utara</h3>
                            <p>	Jl. Setia Budi 2</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Opening Time</h3>
                            <p>Monday - Friday</p>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="book p-4">
                <h3>Book a Table</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input type="text" class="form-control appointment_date" placeholder="Date">
                    </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-ios-clock"></span></div>
                        <input type="text" class="form-control appointment_time" placeholder="Time">
                    </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                </div>
                    </div>
                </form>
            </div> --}}
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
                  <p>Welcome to Goku Coffee, your cozy neighborhood coffee shop where every cup is crafted with care and passion. Nestled in the heart of the community, we pride ourselves on serving the finest coffee made from ethically sourced beans, roasted to perfection.</p>
              </div>
          </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-choices"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Easy to Order</h3>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-delivery-truck"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-coffee-bean"></span></div>
          <div class="media-body">
            <h3 class="heading">Quality Coffee</h3>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
              <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Menu</h2>
            <p class="mb-4"> Whether you're craving a bold espresso, a creamy latte, or a refreshing cold brew, we’ve got something to delight your taste buds. Our inviting space is perfect for catching up with friends, getting work done, or simply enjoying a moment of peace. Pair your favorite brew with our selection of freshly baked pastries and snacks for the ultimate café experience. At Goku Coffee, it’s not just about coffee—it’s about creating connections and memories, one cup at a time.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
          </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-1.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-2.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-3.jpg')}});"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url({{asset('assets/images/menu-4.jpg')}});"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{asset('assets/images/bg_2.jpg')}});">
        <div class="overlay"></div>
  {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="100">0</strong>
                      <span>Coffee Branches</span>
                  </div>
                </div>
              </div>
              {{-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="85">0</strong>
                      <span>Number of Awards</span>
                  </div>
                </div>
              </div> --}}

              
              <div class="parent">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                            <strong class="number" data-number="10567">0</strong>
                            <span>Happy Customer</span>
                        </div>
                    </div>
                </div>
            </div>
            
              {{-- <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="900">0</strong>
                      <span>Staff</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div> --}}
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Discover</span>
        <h2 class="mb-4">Best Sellers</h2>
      </div>
    </div>
    <div class="row">

        @foreach ($products as $product)
        <div class="col-md-3">
            <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url({{ asset('assets/images/'.$product->image.'') }});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="{{ route('product.single', $product->id)}}">{{$product->name}}</a></h3>
                        <p>{{$product->description}}</p>
                        <p class="price"><span>{{$product->price}}</span></p>
                        <p><a href="{{ route('product.single', $product->id)}}" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
        </div> 
        @endforeach
        
        
    </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-1.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-3.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-3.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url({{asset('assets/images/gallery-4.jpg')}});">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
    </div>
    </div>
</section>



<section class="ftco-section img" id="ftco-testimony" style="background-image: url({{asset('assets/images/bg_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Testimony</span>
          <h2 class="mb-4">Customers Says</h2>
        </div>
      </div>
    </div>
    <div class="container-wrap">
      <div class="row d-flex no-gutters">
        @foreach($reviews as $review)
        <div class="col-md align-self-sm-end ftco-animate">
          <div class="testimony">
             <blockquote>
                <p>&ldquo;{{$review->review}}&rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                {{-- <div class="image mr-3 align-self-center">
                  <img src="images/person_1.jpg" alt="">
                </div> --}}
                <div class="name align-self-center">{{$review->name}}</div>
              </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
