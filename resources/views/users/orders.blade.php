@extends('layouts.app')

@section('content')



<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{asset('assets/images/bg_3.jpg')}});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">            
          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <div class="container">
                @if(Session::has('success'))
                <p class="alert{{Session::get('alert-class', 'alert-info')}}">{{ Session::get('success') }}</p>
                @endif
                </div>  
              <h1 class="mb-3 mt-5 bread">My Orders</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>My Orders</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>


   <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table-dark" style="width: 1100px">
                          <thead style="background-color: #c49b63; height: 60px">
                            <tr class="text-center">
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Address</th>
                              <th>Email</th>
                              <th>Price</th>
                              <th>Status</th>
                              <th>Write Reviews</th>
                            </tr>
                          </thead>
                          <tbody>
                            @if($orders->count() > 0)
                            @foreach ($orders as $order)
                            <tr class="text-center" style="height: 140px">
                                <td class="first_name">{{$order->first_name}}</td>

                                <td class="last_name">{{$order->last_name}}</td>
                                
                                <td class="address">{{$order->address}}</td>
                                                               
                                <td class="email">{{$order->email}}</td>
                                
                                <td class="price">{{$order->price}}</td>
                                
                                <td class="total">{{$order->status}}</td>
                                <td class="total">
                                    @if($order->status == "Delivered")
                                        <a class="btn btn-primary" href="{{route('write.reviews')}}">Write Reviews</a>
                                    @else
                                        <p>Not available</p>
                                    @endif
                              </tr><!-- END TR-->
                            @endforeach
                        @else

                              <p class="alert alert-success">You have no orders yet!</p>
                        @endif
                            

                            
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          {{-- <div class="row justify-content-end">
              <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                  <div class="cart-total mb-3">
                      <h3>Cart Totals</h3>
                      <p class="d-flex">
                          <span>Subtotal</span>
                          <span>Rp.{{$totalPrice}}</span>
                      </p>
                      <p class="d-flex">
                          <span>Delivery</span>
                          <span>Rp0.00</span>
                      </p>
                      
                      <hr>
                      <p class="d-flex total-price">
                          <span>Total</span>
                          <span>Rp.{{$totalPrice}}</span>
                      </p>
                  </div>
                  @if($cartProducts->count() > 0)
                  <form method="POST" action="{{route('prepare.checkout')}}">
                    @csrf
                    <input name="price" type="hidden" value="{{ $totalPrice }}">
                  <button type="submit" name="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button>

                  </form>
                  @else
                  <p class="text-center alert alert-success">No item in cart!</p>
                  @endif
              </div>
          </div>
          </div> --}}
      </section>
@endsection