<?php

namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Comment;
    use App\Models\Post;
    use App\Models\User;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Facades\Auth;
    use Session; 
    

class CommentController extends Controller
{
 
        public function __construct()
        {
            $this->middleware('auth');
        }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
         
          
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request , $post_id)
        {
            $this->validate($request, array(
                'commentbd'        => 'required|max:255'
                
            ));
            $post=Post::find($post_id);
            $comment= new \App\Models\Comment();
    
            $comment->commentbd = $request->commentbd;
            
            $comment->user_id = Auth::user()->id ;
            $comment->post()->associate($post);
            
            $comment->save();
            $request->session()->flash('success', 'Your comment was successfully added :))');
            return redirect()->action([PostController::class, 'show'] , [$post->id]);
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
          
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
         
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
           
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
          
        }
    
    
}
