<section class="bg1">
    <h2 class="c"><span class="fade-in-text">{{ __('messages.information') }}</span></h2>
    <div class="list-grid1">
        @foreach ($information as $info)
            <div class="list">
                <figure><img src="{{ $info->img }}" alt=""></figure>
                <div class="text">
                    <h4>{{ $info->title }}</h4>
                    <p>{{ $info->description }}</p>
                </div>
                <p class="btn"><a href="{{ $info->url }}">{{ __('messages.for_more_detail') }}</a></p>
            </div>
        @endforeach
    </div>
</section>
