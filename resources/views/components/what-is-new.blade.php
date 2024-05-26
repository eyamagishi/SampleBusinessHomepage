<section>
    <h2><span class="fade-in-text">{{ __('messages.what_is_new') }}</span></h2>
    <dl class="new">
        @foreach ($newsItems as $newsItem)
            <dt>{{ $newsItem['date'] }}<span>{{ $newsItem['category'] }}</span></dt>
            <dd>{{ $newsItem['description'] }}</dd>
        @endforeach
        <dt>2024/05/19<span>その他</span></dt>
        <dd>トップのスライドショーをcssスライドショーからjQuery+cssタイプに変更。</dd>
        <dt>2024/05/15<span>その他</span></dt>
        <dd>企業・ビジネス向け シンプル無料ホームページテンプレート tp_biz62公開。</dd>
        <dt>20XX/00/00<span class="icon-bg2">重要</span></dt>
        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
        <dt>20XX/00/00<span class="icon-bg1">サービス</span></dt>
        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
        <dt>20XX/00/00<span>その他</span></dt>
        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
        <dt>20XX/00/00<span>その他</span></dt>
        <dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。
        </dd>
    </dl>
</section>
