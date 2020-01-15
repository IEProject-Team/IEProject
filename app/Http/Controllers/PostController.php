<?php
namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as cn;

class PostController extends Controller
{
    public function getDashboard(){
        $posts = Post::all(); 
        return view('dashboard', ['posts' => $posts]);
    }
    
    public function postCreatePost(Request $request)
    {
        $this->validate($request,[
            'body' => 'required|max:1000'
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if ($request->user()->posts()->save($post)){
            $message = 'Post successfully created!';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }
}
  