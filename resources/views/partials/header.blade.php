<h1 id="logo"><a href="#">{{ config('const.my_company') }}</a></h1>
<div id="menubar">
    <nav>
        <ul>
            <li><a href="{{ route('home.index') }}">{{ __('messages.home') }}</a></li>
            <li><a href="#">{{ __('messages.service') }}</a>
                <ul>
                    <li><a href="#">{{ __('messages.menu') }}</a></li>
                    <li><a href="#">{{ __('messages.menu') }}{{ __('messages.menu') }}</a></li>
                    <li><a href="#">{{ __('messages.menu') }}{{ __('messages.menu') }}{{ __('messages.menu') }}</a></li>
                    <li><a href="#">{{ __('messages.menu') }}{{ __('messages.menu') }}{{ __('messages.menu') }}{{ __('messages.menu') }}</a></li>
                </ul>
            </li>
            <li><a href="#">{{ __('messages.company') }}</a></li>
            <li><a href="#">{{ __('messages.contact') }}</a></li>
        </ul>
    </nav>
</div>
