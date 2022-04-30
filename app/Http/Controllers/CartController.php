<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Session;
use Mail;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function shop()
    {
        $posts = Post::all();
        //dd($posts);
        return view('pages.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['posts' => $posts]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('pages.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item is Added to Cart!');
    }
    public function clear(){
        \Cart::clear();
        Session::flash('success','your cart is clear now!');
        return redirect()->action([PagesController::class, 'index']);
    }

    
    

    public function checkout(){
        return view('pages.checkout');
    }

    public function postCheckout(Request $request) {
        
        $data = array(
            'email' => $request->email,
            
            'bodymsg' => $request->bodymsg

        );
        Mail::send('emails.conatct',$data,function($mm) use ($data) {
            $mm->from($data['email']);
            $mm->to('sarajedlaoui999@gmail.com');
            $mm->subject($data['bodymsg']);

        }
    );
    \Cart::clear();
    Session::flash('success','Thank you! we will call you soon !');
    return redirect()->action([PagesController::class, 'index']);


    }


}
