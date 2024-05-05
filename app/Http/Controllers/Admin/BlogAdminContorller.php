<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\blog_post;
use App\Models\Post_Categories;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\BlogPostNotification;
use App\Models\Subscriber;

class BlogAdminContorller extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_user = Auth::user();

        $blogPosts= blog_post::with('post__categories')->get();
        return view('admin.blog.index',compact('blogPosts','auth_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth_user = Auth::user();

        $blogCategories = Post_Categories::all();
        return view('admin.blog.create',compact('blogCategories','auth_user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:4',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'cat_id' => 'required|exists:post__categories,id'
        ]);

        $blogPost = new blog_post();
        $blogPost->title = $validated['title'];
        $blogPost->description = $validated['description'];
        $blogPost->cat_id = $request->cat_id;

        if($request->hasfile('image')){
            $get_file = $request->file('image')->store('images/blogPosts','public');
            $blogPost->image = $get_file;
        }

        $blogPost->save();

        
        $subscribers = Subscriber::all();
        foreach ($subscribers as $subscriber) {
            $name = $subscriber->name;
            $email = $subscriber->email;
            Mail::to($subscriber->email)->send(new BlogPostNotification($blogPost, $name, $email));
        }
        
        return to_route('admin.blogs.index')->with('message','Portfolio Added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auth_user = Auth::user();
        $blogPost = blog_post::find($id);
        $blogCategories = Post_Categories::all();
        return view('admin.blog.edit', compact('blogPost','blogCategories','auth_user'));
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
        $validated = $request->validate([
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:4',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'cat_id' => 'required|exists:post__categories,id'
        ]);

        $blogPost = blog_post::find($id);

        $blogPost->title = $validated['title'];
        $blogPost->description = $validated['description'];
        $blogPost->cat_id = $request->cat_id;

        if($request->hasfile('image')){
            Storage::delete('public/'.$blogPost->image);
            $get_file = $request->file('image')->store('images/blogPosts','public');
            $blogPost->image = $get_file;
        }

        $blogPost->update();
        return to_route('admin.blogs.index')->with('message','Portfolio Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogPost = blog_post::find($id);
        if($blogPost->image != null){
            Storage::delete('public/'.$blogPost->image);
        }
        $blogPost -> delete();
        return back()->with('message', 'blogPost Deleted');
    }

    public function search(Request $request)
    {
        $searchedItem = $request->input('search');

        $blogPosts = blog_post::query()
        ->where('title', 'LIKE', "%{$searchedItem}%")
        ->orWhere('description', 'LIKE', "%{$searchedItem}%")
        ->get();

        $auth_user = Auth::user();

    // Return the search view with the resluts compacted
    return view('admin.blog.search', compact('blogPosts','auth_user'));

    }

   
}
