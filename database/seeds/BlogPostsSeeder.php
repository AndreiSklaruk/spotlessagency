<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $myArray = include(base_path('database/seeds/blog_entries.php'));
        foreach($myArray as $id => $data) {
            if (!file_exists(base_path("database/seeds/contents/$id.html"))) {
               dump("skip $id");
               continue;
            }
            $author = $data[0];
            $publish_after = $data[1];
            $content = file_get_contents(base_path("database/seeds/contents/$id.html"));
            $post_title = $data[4]; // title
            $post_name = $data[10]; // slug
            $description = Str::limit(strip_tags($content), 160, '');
            $summary = $description;
            \Bjuppa\LaravelBlog\Eloquent\BlogEntry::create([
                'id' => $id,
                'author_name' => 'ANDREY ZLOBIN',
                'publish_after' => strtotime($publish_after),
                'image' => url('images/image-placeholder.jpg'),
                'content' => str_replace(["\\n", "\\r", "\n", "\r"], '', $content),
                'title' => $post_title,
                'slug' => $post_name,
                'summary' => $summary,
                'meta_tags' => '{}',
                'page_title' => $post_title,
                'description' => $description,
            ]);
        }
    }
}
