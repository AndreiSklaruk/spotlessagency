<?php

namespace App\Http\Controllers\Blog;

use Bjuppa\LaravelBlog\Http\Controllers\BaseBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryController extends BaseBlogController
{
    public function show(string $slug) {

        return View::first($this->blog->bladeViews('category'))
            ->with($catego);
    }
}
