<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listPostsbyUser = Post::all()->where('user_id', auth()->user()->id);
        $listPosts = Post::all();
        if(auth()->user()->email != "fofanabr97@gmail.com"){
            return view('posts.indexPostUser', compact('listPosts', 'listPostsbyUser'));
        }
        return view('welcome', compact('listPosts'));
    }

    //création de user post

    public function create(){
        $categories = Category::all();
        return view('posts.newPostUser',compact('categories'));
    }
}
