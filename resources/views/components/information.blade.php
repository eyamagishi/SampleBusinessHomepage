<section class="bg1">
    <h2 class="c"><span class="fade-in-text">{{ __('messages.information') }}</span></h2>
    <div class="list-grid1">
        @foreach ($informations as $information)
            <div class="list">
                <figure><img src="{{ $information['img'] }}" alt=""></figure>
                <div class="text">
                    <h4>{{ $information['title'] }}</h4>
                    <p>{{ $information['explanation'] }}</p>
                </div>
                <p class="btn"><a href="{{ $information['url'] }}">{{ __('messages.for_more_detail') }}</a></p>
            </div>
        @endforeach
    </div>
</section>
