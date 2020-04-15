@section('blogRelatedContent')
    <h3 class="title text-left related-post-heading">{{ __($blog->transKey('titles.related_entries')) }}</h3>
    @includeFirst($blog->bladeViews('blog.relatedEntriesLinks'))
@show
