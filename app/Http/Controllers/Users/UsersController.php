<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Product\Order;
use App\Models\Product\Review;
use Illuminate\Http\Request;
use Auth;
use Redirect;


class UsersController extends Controller
{
    public function displayOrders(){

        $orders = Order::select()->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('users.orders', compact('orders'));
    }

    public function writeReview(){

        return view('users.writereview');
    }

    public function processWriteReview(Request $request){

        $writeReviews = Review::create([
            "name"=> Auth::user()->name,
            "review"=> $request->review,
        ]);


        if($writeReviews){
            return Redirect::route('write.reviews')->with(['reviews'=> "Review Submitted Successfully"]);
        }
    }
}