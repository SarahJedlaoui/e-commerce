<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Single($name)
    {
        $user = User::where('name', '=', $name)->first();
        return view('user.single')->with('user', $user);
    }
    public function archieve($name)
    {  
        $post= Post::all();
        $user = User::where('name', '=', $name)->first();
        return view('user.posts')->with('user', $user)->with('post',$post);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $user = User::where('name', '=', $name)->first();
        return view('user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name)
    {
        $user = User::where('name', '=', $name)->first();
        $user->img = $request->input('img');
        if ($request->hasFile('img')) {

            $file = $request->file('img');

            $extension = $file->getClientOriginalExtension();

            $name = time() . '.' . $extension;

            $file->move(public_path("images"), $name);

            $user->img = $name;
        } else {

            return $request;

            $user->img = '';
        }
        $user->phone = $request->input('phone');
        $user->location = $request->input('location');
        $user->job = $request->input('job');
        $user->facebook = $request->input('facebook');
        $user->instagram = $request->input('instagram');
        $user->github = $request->input('github');
        $user->twitter = $request->input('twitter');
        $user->website = $request->input('website');
        

        
        $user->save();
        $request->session()->flash('success', 'Your profile was successfully updated ! :)');
        return redirect()->action([UserController::class, 'Single'], [$user->name]);
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
