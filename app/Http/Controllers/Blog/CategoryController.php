<?php

namespace App\Http\Controllers\Blog;

use App\Term;
use Bjuppa\LaravelBlog\Http\Controllers\BaseBlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class CategoryController extends BaseBlogController
{
    public function show(string $slug) {
        $category = Term::where('slug', '=', $slug)->firstOrFail();
        $categoryEntries = $category->blogEntries()->paginate(10);

        return View::first($this->blog->bladeViews('category'))
            ->with('category', $category)
            ->with('entries', $categoryEntries);
    }
}
