<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Archive(){
        $posts = Post::paginate(2);
        return view('pro.index')->with('posts',$posts);


    }
    public function Single($slug) {
        $post=Post::where('slug','=',$slug)->first();
        return view('pro.single')->with('post',$post);

    }
}
