<?php

namespace App\Http\View\Composers;

use Wave\Category;
use Wave\Post;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @rerurn void
     */
    public function compose(View $view)
    {
        $menus = Category::tree();
        $posts = Post::where('category_id', 4)->take(2)->get();

        return $view->with(compact('menus', 'posts'));
    }
}