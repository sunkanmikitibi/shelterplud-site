<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use App\Models\Categoryblg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    //
    public function index()
    {
        $posts = Post::query()
            ->where('isActive', '=', 1)
            ->where('published_at', '<', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $categories = Categoryblg::all();
        $footerposts = Post::latest()->limit(3)->get();

        return view('site_pages.blog', compact('posts', 'categories', 'footerposts'));
    }

    public function show(Post $post)
    {
        if (!$post->isActive || $post->published_at > Carbon::now()) {
            throw new NotFoundHttpException();
        }

        $recentPosts = Post::latest()->limit(3)->get();

        $next = Post::query()
            ->where('isActive', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '<', $post->published_at)
            ->orderBy('published_at', 'desc')
            ->limit(1)
            ->first();

        $prev = Post::query()
            ->where('isActive', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->whereDate('published_at', '>', $post->published_at)
            ->orderBy('published_at', 'asc')
            ->limit(1)
            ->first();

            $footerposts = Post::latest()->limit(3)->get();

        $blogcategories = Categoryblg::query()
            ->join('categoryblg_post', 'categoryblgs.id', '=', 'categoryblg_post.categoryblg_id')
            ->select('categoryblgs.title',  'categoryblgs.slug', DB::raw('count(*) as total'))
            ->groupBy('categoryblgs.title', 'categoryblgs.slug')
            ->orderByDesc('total')
            ->limit(5)
            ->get();

        return view('site_pages.blogdetails', compact('post', 'next', 'prev', 'blogcategories', 'recentPosts', 'footerposts'));
    }


    public function byCategory(Categoryblg $categoryblg)
    {
        $categories = Categoryblg::all();
        $posts = Post::query()
            ->join('categoryblg_post', 'posts.id', '=', 'categoryblg_post.post_id')
            ->where('categoryblg_post.categoryblg_id', '=', $categoryblg->id)
            ->where('isActive', '=', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

            return view('site_pages.blog', compact('posts', 'categories'));
    }
}
