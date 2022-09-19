<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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

        $listPostsbyUsers = Post::paginate(8)->where('user_id', auth()->user()->id);
        $listPosts = Post::paginate(8);
        if(auth()->user()->email != "fofanabr97@gmail.com"){
            return view('posts.indexPostUser', compact('listPosts', 'listPostsbyUsers'));
        }
        return view('welcome', compact('listPosts'));
    }

    //création de user post

    public function create(){
        $categories = Category::all();
        return view('posts.new',compact('categories'));
    }
}
