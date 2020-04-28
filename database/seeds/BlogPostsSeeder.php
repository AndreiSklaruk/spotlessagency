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
        $newPosts = [];
        foreach($myArray as $id => $data) {
            $author = $data[0];
            $publish_after = $data[1];
            $content = $data[3];
            $post_title = $data[4]; // title
            $post_name = $data[10]; // slug
            $description = Str::limit(str_replace(["\\n", "\\r"], '',preg_replace('/\[.+?\]/m', '', strip_tags($content))), 170);
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
                'page_title' => $post_title,
                'description' => $description,
            ]);
        }
    }
}
