<?php

namespace App\Providers;

use App\Term;
use Bjuppa\LaravelBlog\Blog;
use Bjuppa\LaravelBlog\Eloquent\BlogEntry;
use Bjuppa\LaravelBlog\Eloquent\BlogEntryProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $default = [
            'main'=>''
        ];
        $blogId = array_keys(config('blog.blogs', $default))[0];
        $blogEntryProvider = new BlogEntryProvider(new BlogEntry());
        $blog = new Blog($blogId, $blogEntryProvider);
        View::share('blogHelper', $blog);
    }
}
