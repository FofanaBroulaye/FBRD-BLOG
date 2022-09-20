<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('posts.new', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=> 'required',
            'category_id'=> 'required',
            'comment' => 'required',
            'photo' => 'required',
            'prix' => 'required'

        ]);

        try{

           Post::create([
            'title'=> $request->nom,
            'category_id'=> $request->category_id,
            'content' => $request->comment,
            'image' => $request->photo ? $request->photo->store('photos','public') : null,
            "user_id" => auth()->user()->id,
             "prix" => $request->prix
           ]);
           if($request){
            Toast('Post crée avec succès', 'success');
           }

        }catch (\Exception $exception){
            session()->flash('warning',$exception->getMessage());
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'nom'=> 'required',
            'category_id'=> 'required',
            'comment' => 'required',
            'photo' => 'required',
            'prix' => 'required'

        ]);

        try{


           $post->update([
            'title'=> $request->nom,
            'category_id'=> $request->category_id,
            'content' => $request->comment,
            'prix' => $request->prix,
            'image' => $request->photo ? $request->photo->store('photos','public') : null,
            // "user_id" => auth()->user()->id
           ]);

           if($request){
               Toast('Post édité avec succès', 'success');
           }

        }catch (\Exception $exception){
            session()->flash('warning',$exception->getMessage());
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        Toast('Post supprimé avec succès', 'success');
        return redirect('/');

    }

    public function listusers(){
        $users = User::paginate(5);
        return view('users.liste', compact('users'));
    }

    public function search(){
        $keyword = request()->input('q');
        $listPosts = Post::whereHas('categories', function ($q) use($keyword){
            $q->where('name', 'like', "%$keyword%");
        })->orWhere('title', 'like', "%$keyword%")
            ->paginate(8);


        return view('posts.search', compact('listPosts'));
    }
}
