<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Order;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Hash;
use File;
use Redirect;


class AdminsController extends Controller
{
    public function viewLogin(){

        return view('admins.login');
    }

    public function checkLogin(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);

    }

    public function index(){

        $productsCount = Product::select()->count();
        $ordersCount = Order::select()->count();
        $adminsCount = Admin::select()->count();

        return view('admins.index', compact('productsCount', 'ordersCount', 'adminsCount'));
    }

    public function displayAllAdmins(){

        $allAdmins = Admin::select()->orderBy('id', 'desc')->get();
        

        return view('admins.alladmins', compact('allAdmins'));
    }


    public function createAdmins(){

        

        return view('admins.createadmins');

        
    }

    public function storeAdmins(Request $request){


        Request()->validate([
            "name" => "required|max:40",
            "email" => "required|max:40",
            "password" => "required|max:40",

        ]);

        $storeAdmins = Admin::Create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        if($storeAdmins){
            return Redirect::route('all.admins')->with( ['success' => "Admin Created Successfully!"] );

        }

        
    }
    
    //orders
    public function displayAllOrders(){

        $allOrders = Order::select()->orderBy('id', 'desc')->get();
        

        return view('admins.allorders', compact('allOrders'));
    }

    public function editOrders($id){

        $order = Order::find($id);        

        return view('admins.editorders', compact('order'));
    }
    

    public function UpdateOrders(Request $request, $id){

        $order = Order::find($id);        

        $order->update($request->all());

        if($order){

            return Redirect::route('all.orders')->with( ['update' => "Order Status Updated Successfully!"] );


        }

    }

    public function deleteOrders($id){

        $order = Order::find($id);        

        $order->delete();

        if($order){

            return Redirect::route('all.orders')->with( ['delete' => "Order Deleted Successfully!"] );


        }

    }
    public function displayProducts(){

        $products = Product::select()->orderBy('id', 'desc')->get();
        

        return view('admins.allproducts', compact('products'));
    }

    public function createProducts(){

        

        return view('admins.createproducts');
    }
    public function storeProducts(Request $request){


        // Request()->validate([
        //     "name" => "required|max:40",
        //     "email" => "required|max:40",
        //     "password" => "required|max:40",

        // ]);

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeProducts = Product::Create([
            "name" => $request->name,
            "price" => $request->price,
            "image" => $myimage,
            "description" => $request->description,
            "type" => $request->type,

        ]);

        if($storeProducts){
            return Redirect::route('all.products')->with( ['success' => "Product Created Successfully!"] );

        }

        
    }
    
    public function deleteProducts($id){

        $product = Product::find($id);
        
        if(File::exists(public_path('assets/images/' . $product->image))){
            File::delete(public_path('assets/images/' . $product->image));
        }else{
            //dd('File does not exists.');
        }

        $product->delete();

        if($product){
            return Redirect::route('all.products')->with( ['delete' => "Product Deleted Successfully!"] );

        }
        
    }
    
}
