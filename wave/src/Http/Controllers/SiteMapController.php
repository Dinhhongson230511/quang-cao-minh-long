<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Wave\Post;
use Wave\Category;

class SiteMapController extends Controller
{
    public function index() {
        $posts =  $posts = Post::orderBy('created_at', 'DESC')->get();
        
        $results = [];
        foreach ($posts as $key => $post) {
            $results [] = [
                'created_at' => $post->getRawOriginal('created_at') ?? null,
                'link' => $post->link(),
                'type' => 'post'
            ];
        }

        return response()->view('theme::sitemap', [
            'posts' => $results
        ])->header('Content-Type', 'text/xml');
    }

    public function category() {
        $categories =  Category::get();
        
        $results = [];
        foreach ($categories as $category) {
            $link = route('wave.blog.category', $category->slug);
            $results [] = [
                'created_at' => $category->created_at ?? null,
                'link' => $link,
                'type' => 'category'
            ];
        }

        return response()->view('theme::sitemap', [
            'posts' => $results
        ])->header('Content-Type', 'text/xml');
    }
}
