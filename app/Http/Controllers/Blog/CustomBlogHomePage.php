<?php

namespace App\Http\Controllers\Blog;

use Bjuppa\LaravelBlog\Eloquent\BlogEntry;
use Bjuppa\LaravelBlog\Http\Controllers\BaseBlogController;
use Illuminate\Support\Facades\View;

class CustomBlogHomePage extends BaseBlogController
{
    public function show() {
        return View::first($this->blog->bladeViews('index'))->with('entries', BlogEntry::paginate(10));
    }
}
