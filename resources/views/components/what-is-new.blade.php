<section>
    <h2><span class="fade-in-text">{{ __('messages.what_is_new') }}</span></h2>
    <dl class="new">
        @foreach ($newsItems as $newsItem)
            <dt>{{ $newsItem->published_at }}
                @if ($newsItem->category_id === config('const.category_other'))
                    <span>{{ $categories[$newsItem->category_id]->category_name }}</span>
                @elseif ($newsItem->category_id === config('const.category_important'))
                    <span class="icon-bg2">{{ $categories[$newsItem->category_id]->category_name }}</span>
                @elseif ($newsItem->category_id === config('const.category_service'))
                    <span class="icon-bg1">{{ $categories[$newsItem->category_id]->category_name }}</span>
                @endif
            </dt>
            <dd>{{ $newsItem->content }}</dd>
        @endforeach
    </dl>
</section>
