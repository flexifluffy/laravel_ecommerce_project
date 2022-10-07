<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $products=product::paginate(9);
        return view('home.userpage', compact('products'));
    }


    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.home');
        }

        else

        {
            $products=product::paginate(9);
            return view('home.userpage',compact('products'));
        }

    }


    public function product_details($id)
    {
        $product=product::find($id);

        return view('home.product_details', compact('product'));

    }

    public function add_cart(request $request, $id)
    {
        if(Auth::id())
        {
            $user=Auth::user();

            $product=product::find($id);

            $cart = new cart();
            $cart->user_id = $user->id;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity; 
            $cart->save();

            return redirect()->back();

        }
        else
        {
            return redirect('login');
        }
    }
    
}


?>