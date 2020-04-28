<?php
/**
 *
 */
    use App\Term;
?>
<ul>
    @foreach(Term::getList() as $term)
        <li class="cat-item cat-item-{{ $term->id }}">
            <a href="{{ url('/blog/category/' . $term->slug) }}">{{ $term->name }}</a> ({{ $term->blog_entries_count }})
        </li>
    @endforeach
</ul>
