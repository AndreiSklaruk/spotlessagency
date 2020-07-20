<?php

namespace App\Http\Controllers\Admin;

use App\Term;
use Bjuppa\LaravelBlogAdmin\Http\Requests\BlogEntryRequest;
use Bjuppa\LaravelBlog\Contracts\Blog;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Kontenta\Kontour\Concerns\AuthorizesAdminRequests;
use Kontenta\Kontour\Concerns\RegistersAdminWidgets;
use Kontenta\Kontour\Contracts\CrumbtrailWidget;
use Kontenta\Kontour\Contracts\MessageWidget;

class BlogEntryController extends BaseController
{
    use RegistersAdminWidgets, AuthorizesAdminRequests;

    public function __construct()
    {
        $this->crumbtrail = $this->findOrRegisterAdminWidget(CrumbtrailWidget::class, 'kontourToolHeader');
        $this->messages = $this->findOrRegisterAdminWidget(MessageWidget::class, 'kontourToolHeader');
    }

    public function store(BlogEntryRequest $request)
    {
        $request->entry->fill($request->validated())->save();
        // todo validate in request
        $categorySlug = $request->get('category', 'none');
        $category = Term::where('slug', $categorySlug)->first();
        if ($category) {
            $category->blogEntries()->attach($request->entry, ['term_order' => 0]);
        }
        return redirect(route('blog-admin.entries.edit', [$request->entry->getBlogId(), $request->entry->getKey()]))
            ->with('status', 'Blog entry created');
    }
}
