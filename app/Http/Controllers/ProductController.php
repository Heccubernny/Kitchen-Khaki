<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    public function list(){
        $data = product::paginate(3);
        return view('user.products', compact('data'));
    }
    public function search(Request $request){
        $searchdata = $request->search;
        if($searchdata == ""){
            $data = product::paginate(3);            
            return view('user.products', compact('data'));
        }
        else{
        }
        
        $data = product::where('title', 'Like', '%'.$searchdata.'%')->get();
        return view('user.products', compact('data'));
    }

    public function product($id){
        $data=product::find($id);

        if(!$data){
            abort(404);
        }

        if(Auth::id()){
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address= $user->address;
            $cart->product_title = $product->title;
            $cart->quantity = $product->quantity;
            $cart->price = $product->price;

            $cart->save();


            // return view('')->with('cartsuccessmessage', 'Product Added to Cart Successfully' );

            // return redirect()->back();
        }
        else{
            return redirect('login');
        }


        $cart = session()->get('cart');

        if(!$cart){
            $cart = [
                $id => [
                    "title"=>$data->title,
                    "quantity"=>$data->quantity,
                    "price"=>$data->price,
                    "image"=>$data->image,

                ]
            ];

            session()->put('cart', $cart);
        }

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            
        }

        return view("user.product", compact('data'));
    }

    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->phone = $user->phone;
            $cart->address= $user->address;
            $cart->product_title = $product->title;
            $cart->quantity = $product->quantity;
            $cart->price = $product->price;

            $cart->save();




            return redirect()->back();
        }
        else{
            return redirect('login');
        }

    }
}
