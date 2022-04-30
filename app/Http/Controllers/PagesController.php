<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use DB ;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $categories = Category::all();
       
        $posts = post::latest()->paginate(6);

        return view('pages.index', compact('categories', 'posts'));
    }
   

    public function about() {
        return view('pages.about') ;
    }
    public function contact() {
        return view('pages.contact') ;
    }
    public function postContact(Request $request) {
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymsg' => $request->bodymsg

        );
        Mail::send('emails.conatct',$data,function($mm) use ($data) {
            $mm->from($data['email']);
            $mm->to('anouarmechri9@gmail.com');
            $mm->subject($data['subject']);

        }
    );
    Session::flash('success','your email was Sent!');
    return redirect()->action([PagesController::class, 'index']);


    }



}

