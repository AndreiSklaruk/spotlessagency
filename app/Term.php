<?php

namespace App;

use Bjuppa\LaravelBlog\Support\HandlesRoutes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Term extends Model
{
    use HandlesRoutes;
    protected $fillable = [ 'name' ];
    /**
     * The blog entries that belong to the category.
     */
    public function blogEntries()
    {
        return $this->belongsToMany('Bjuppa\LaravelBlog\Eloquent\BlogEntry');
    }

    public static function getList() {
        return Term::has('blogEntries')->withCount('blogEntries')->orderBy('name')->get();
//        return Term::has('blogEntries')->orderBy('name')->get();
    }

    public static function getBlogEntryCategories($id) {
        $category = Term::whereHas('blogEntries', function (Builder $query) use ($id) {
            $query->where('id', '=', $id);
        })->get();

        if ($category->count() > 0) {
            return $category;
        }

        return new Collection([new Term(['name' => 'Without feature'])]); //todo rector
    }

    public static function getRelatedBlogEntryTo($id) {
        $category = Term::whereHas('blogEntries', function (Builder $query) use ($id) {
            $query->where('id', '=', $id);
        })->first();

        if ($category) {
            return $category
                ->blogEntries()->where('id', '<>', $id)->limit(3)->get();
        }
        return []; //todo fix new entry category
    }
}
