<?php

namespace App\Http\Controllers\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\blog_post;
use App\Models\Post_Categories;
use App\Models\BlogComment;


class BlogController extends Controller
{
    public function index()
    {
        $user = User::first();
        $latestBlogs = blog_post::latest('updated_at')->take(4)->get();
        // HOT TOPICS

        $subquery = DB::table('blog_comments')
            ->select('blog_post_id', DB::raw('COUNT(*) as comment_count'))
            ->groupBy('blog_post_id');

        // Get the 4 blog posts with the highest number of comments
        $popularBlogs = blog_post::leftJoinSub($subquery, 'comments', function ($join) {
            $join->on('blog_posts.id', '=', 'comments.blog_post_id');
        })
            ->orderBy('comments.comment_count', 'desc')
            ->take(4)
            ->get();



        $postCategories = Post_Categories::take(3)->get();
        return view('blogs.blogs', compact('postCategories', 'latestBlogs', 'user', 'popularBlogs'));
    }

    public function allBlogs()
    {
        $title = 'All Blogs';
        $user = User::first();
        $allBlogs = blog_post::all();
        return view('blogs.allblogs', compact('user', 'allBlogs', 'title'));
    }

    public function featuredBlogs()
    {
        $title = 'Featured Blogs';
        $user = User::first();
        $subquery = DB::table('blog_comments')
            ->select('blog_post_id', DB::raw('COUNT(*) as comment_count'))
            ->groupBy('blog_post_id');

        // Get the 4 blog posts with the highest number of comments
        $allBlogs = blog_post::leftJoinSub($subquery, 'comments', function ($join) {
            $join->on('blog_posts.id', '=', 'comments.blog_post_id');
        })
            ->orderBy('comments.comment_count', 'desc')
            ->take(12)
            ->get();
        return view('blogs.allblogs', compact('user', 'allBlogs', 'title'));
    }

    public function latestBlogs()
    {
        $title = 'Latest Blogs';
        $user = User::first();
        $allBlogs = blog_post::latest('updated_at')->take(12)->get();
        return view('blogs.allblogs', compact('user', 'allBlogs', 'title'));
    }

    public function blogCategories()
    {
        $title = 'All Blog Categories';
        $user = User::first();
        $postCategories = Post_Categories::all();
        return view('blogs.blogCategories', compact('user', 'postCategories', 'title'));
    }

    public function popularCategories()
    {
        $title = 'Popular Blog Categories';
        $user = User::first();

        $subquery = DB::table('blog_posts')
            ->select('cat_id', DB::raw('COUNT(*) as blog_count'))
            ->groupBy('cat_id');

        // Get the top 9 categories with the highest number of blogs
        $postCategories = Post_Categories::leftJoinSub($subquery, 'blogs', function ($join) {
            $join->on('post_categories.id', '=', 'blogs.cat_id');
        })
            ->orderByDesc('blogs.blog_count')
            ->take(9)
            ->get();

        return view('blogs.blogCategories', compact('user', 'postCategories', 'title'));
    }

    public function categoryView($id)
    {
        $user = User::first();
        $category = Post_Categories::find($id);
        $blogPosts = blog_post::where('cat_id', $id)->get();
        return view('blogs.categoryBlogs', compact('blogPosts', 'category', 'user'));
    }

    public function postView($id)
    {
        $id = urldecode($id);
        $user = User::first();
        $blogPost = blog_post::where('title', $id)->first();
        $commentsLen = count(BlogComment::where('blog_post_id', $blogPost->id)->get());
        $comments = BlogComment::where('blog_post_id', $blogPost->id)->orderBy('created_at', 'desc')->get();
        return view('blogs.singlePost', compact('user', 'blogPost', 'comments', 'commentsLen'));
    }


    public static function shortText($text, $maxLength)
    {
        if (strlen($text) > $maxLength) {
            $truncatedText = substr($text, 0, $maxLength) . '...';
            return $truncatedText;
        }

        return $text;
    }

    public function searchBlogs(Request $request)
    {
        $user = User::first();

        $query = $request->input('searchKey');

        // Search in BlogPost model
        $allBlogs = blog_post::where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->get();

        // Search in PostCategory model
        $postCategories = Post_Categories::where('name', 'like', "%$query%")
            ->get();

        return view('blogs.searchpage', compact('allBlogs', 'postCategories', 'user',));
    }
}
