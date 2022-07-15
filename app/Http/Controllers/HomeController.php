<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        // A condition to determine the redirect system if user login and if it is 1 then it is an admin

        $user = auth()->user();
        

        if($usertype=='1')
        {
            $count = Cart::where('phone', $user->phone)->count();

            return view('admin.home');
        }
        else
        {
        $count = Cart::where('phone', $user->phone)->count();
            
            // for user
            return view('user.home');
        }

        

    }

    public function index()
    {
        // $count = cart::where('phone', $user->phone)->count();
        // return view('user.components.header', compact('count'));

        if(Auth::id(1)){
            return redirect('redirect');
        }
        else{
            return view('user.home');
        }
    }


}
