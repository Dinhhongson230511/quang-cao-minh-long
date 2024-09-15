<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Wave\Category;
use Wave\Post;
use App\Models\Video;

class BlogController extends Controller
{
    public function index() {

        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);
        $categories = Category::all();

    	$seo = [
    		'seo_title' => 'Blog',
            'seo_description' => 'Our Blog',
       	];

    	return view('theme::blog.index', compact('posts', 'categories', 'seo'));
    }

    public function category($slug) {

        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(9);
        $categories = Category::all();

        $seo = [
            'title' => $category->name . '- Blog',
            'description' => $category->name . '- Blog',
            'image' => url('storage/'.setting('site.icon')),
        ];

        if($category->slug === 'du-an' || $category->slug === 'mau-bien-dep') {
            return view('theme::partials.qc.project', compact('posts', 'category', 'categories', 'seo'));
        }

        if($category->slug === 'lien-he') {
            return view('theme::partials.qc.lienhe', compact('posts', 'category', 'categories', 'seo'));
        }

        if($category->slug === 'video') {
            $first_video = Video::orderBy('created_at', 'DESC')->first();
            $videos =  Video::orderBy('created_at', 'DESC')->paginate(9);
            return view('theme::partials.qc.video', compact('category', 'categories', 'seo', 'first_video', 'videos'));
        }

        if($category->slug === 'tin-tuc') {
            $first_post = $category->posts()->orderBy('created_at', 'DESC')->first();
            $featured_post = $category->posts()->where('featured', 1)->orderBy('created_at', 'DESC')->take(6)->get();
            $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(9);
            return view('theme::partials.qc.news', compact('posts', 'categories', 'seo', 'first_post', 'featured_post'));
        }

        return view('theme::partials.qc.detail_cate', compact('posts', 'category', 'categories', 'seo'));
    }

    public function post($category, $slug) {
        $category = Category::where('slug', '=', $category)->firstOrFail();

        if($category->slug == 'video') {
            $first_video = Video::where('slug', $slug)->first();
            if(!$first_video) {
                abort(404);
            }
            $seo = [
                'title' => $first_video->name,
                'description' => $first_video->name,
                'image' => $first_video->image_url(),
            ];
            $videos =  Video::orderBy('created_at', 'DESC')->paginate(9);
            return view('theme::partials.qc.video', compact('category', 'seo', 'first_video', 'videos'));
        }

    	$post = Post::where('slug', '=', $slug)->firstOrFail();
        
        $seo = [
            'title' => $post->seo_title ?? $post->title,
            'description' => $post->meta_description ?? $post->excerpt,
            'image' => $post->image(),
            'keywords' => $post->meta_keywords ?? null,
        ];

        if($category->slug == 'tin-tuc') {
            $first_post = $category->posts()->orderBy('created_at', 'DESC')->first();
            $posts = $category->posts()->orderBy('created_at', 'DESC')->take(6)->get();
            return view('theme::partials.qc.detail_news', compact('post', 'seo', 'first_post', 'posts')); 
        }

    	return view('theme::partials.qc.detail_post', compact('post', 'seo'));
    }
}
