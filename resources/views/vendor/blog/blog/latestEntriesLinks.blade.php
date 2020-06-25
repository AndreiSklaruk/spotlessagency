<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 * @var $limit integer
 */
use App\Term;
?>
<ul class="recent-posts-list">
    @foreach($blog->latestEntries($limit ?? 3) as $entry)
        <li class="post-item clearfix ">
            <a href="{{ $blog->urlToEntry($entry) }}" class="more">
                <img width="150" height="150"
                     src="{{ preg_replace('/(-scaled)?.jpg/', '-150x150.jpg', $entry->getImageUrl()) }}"
                     class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                     srcset="{{ preg_replace('/(-scaled)?.jpg/', '-150x150.jpg', $entry->getImageUrl()) }} 150w,
                             {{ preg_replace('/(-scaled)?.jpg/', '-200x200.jpg', $entry->getImageUrl()) }} 200w"
                     sizes="(max-width: 150px) 100vw, 150px">
            </a>
            <div class="content-wrap">
                <h4 class="text-left font-main">
                    <a href="{{ $blog->urlToEntry($entry) }}">{{ $entry->getTitle() }} </a>
                </h4>
                <span class="date">{{ $entry->getPublished()->format('d.m.Y') }}</span>
                <span class="categories">{{ Term::getBlogEntryCategories($entry->getId())->first()->name }}</span>
                <br>
                <div class="subtitle">
                    <span class="comments">
                        <a href="{{ $blog->urlToEntry($entry) }}">No comments</a>
                    </span>
                </div>
            </div>
        </li>
    @endforeach
</ul>
