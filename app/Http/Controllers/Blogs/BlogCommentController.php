<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog_post;
use App\Models\BlogComment;

class BlogCommentController extends Controller
{
    //Storing comment
    public function store(Request $request, $id, $replyId){
        $id = urldecode($id);  
        $validated = $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        
        $comment = new BlogComment();
        $comment->name = $validated['name'];
        $comment->email = $validated['email'];
        $comment->comment = $validated['comment'];

        $blog = blog_post::where('title', $id)->first();
        
        $comment->blog_post_id = $blog->id;
        if($replyId != '#'){
            $comment->replied_to_id = $replyId;
        }
        $comment->save();

        return redirect()->route('blogs.post', ['id' => urlencode($id)])->with('message','New Category Added');
    }

  
    
}
