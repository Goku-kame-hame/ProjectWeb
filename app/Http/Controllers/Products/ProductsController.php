<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Cart;
use App\Models\Product\Order;
use Redirect;
use Auth;
use Session;

class ProductsController extends Controller
{
    

    public function singleProduct($id){

        $product = Product::find($id);


        $relatedProducts = Product::where('type', $product->type)
        -> where('id', '!=', $id)->take('4')
        ->orderBy('id', 'desc')
        ->get();

        if(isset(Auth::user()->id)){

        //ngecheck produk in cart

        $checkingInCart = Cart::where('pro_id', $id)
        ->where('user_id', Auth::user()->id)
        ->count();

        return view('products.productsingle', compact('product', 'relatedProducts', 'checkingInCart'));

        } else{
            return view('products.productsingle', compact('product', 'relatedProducts'));

        }

        

    }

    public function addCart(Request $request, $id){

      $addCart = Cart::create([
        "pro_id" => $request-> pro_id,
        "name" => $request-> name,
        "image" => $request-> image,
        "price" => $request-> price,
        "user_id" => Auth::user()->id,
      ]);

      return Redirect::route('product.single', $id)->with( ['success' => "Product Added to Cart Successfully!"] );
    }


    public function cart(){

        $cartProducts = Cart::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->get();

        $totalPrice = Cart::where('user_id', Auth::user()->id)
        ->sum('price');
  
        return view('products.cart', compact('cartProducts', 'totalPrice'));
      }



      public function deleteProductCart($id){

        $deleteProductCart = Cart::where('pro_id', $id)
        ->where('user_id', Auth::user()->id);
        
        $deleteProductCart->delete(); 
    if($deleteProductCart){
        return Redirect::route('cart')->with( ['delete' => "Product Deleted From Cart Successfully!"] );
    }
    }

    public function prepareCheckout(Request $request){

        $value = $request->price;

        $price = Session::put('price', $value);

        $newPrice = Session::get($price);

    if($newPrice > 0){
        return Redirect::route('checkout');

    }

    }
    public function checkout(){

        return view('products.checkout');
    }


    public function storeCheckout(Request $request){
        
        $checkout = Order::create($request->all());

        return Redirect::route('users.orders')->with( ['success' => "The Order is Created Successfully!"] );
    }

    public function menu(){

        $foods = Product::select()->where("type","foods")->orderBy('id', 'desc')
        ->take(4) ->get();
        $drinks = Product::select()->where("type","drinks")->orderBy('id', 'desc')
        ->take(4) ->get();

        return view ('products.menu', compact('foods','drinks'));
    }



}
