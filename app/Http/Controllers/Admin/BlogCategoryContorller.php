<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post_Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogCategoryContorller extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Post_Categories::all();
        $auth_user = Auth::user();
        return view('admin.blogCategory.index', compact('auth_user','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auth_user = Auth::user();
        return view('admin.blogCategory.create',  compact('auth_user'));
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
            'name'=> 'required|min:3',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        $category = new Post_categories();
        $category->name = $validated['name'];
        if($request->hasfile('image')){
            $get_file = $request->file('image')->store('images/blogCategory','public');
            $category->image = $get_file;
        }
        // Post_Categories::create($validated);
        $category->save();

        return to_route('admin.blog-category.index')->with('message','New Category Added');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Post_Categories::find($id);
        $auth_user = Auth::user();
        return view('admin.blogCategory.edit', compact('category','auth_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
       
        $validated = $request->validate([
            'name'=> 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $category = Post_Categories::find($id);
        $category->name = $validated['name'];

        if($request->hasfile('image')){
            Storage::delete('public/'.$category->image);
            $get_file = $request->file('image')->store('images/blogCategory','public');
            $category->image = $get_file;
        }
        $category->update();

        return to_route('admin.blog-category.index')->with('message','Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Post_Categories::find($id);
        $category->delete();
        return to_route('admin.blog-category.index')->with('message', 'Category Deleted');
    }


}
