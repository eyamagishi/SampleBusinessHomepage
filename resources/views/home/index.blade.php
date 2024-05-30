@extends('layouts.app')

@section('title')
    {{ __('messages.title_home_index') }}
@endsection

@section('mainimg')
    @include('partials.mainimg')
@endsection

@section('content')
    <main>
        <x-information :information="$information" />
        <x-what-is-new :news-items="$newsItems" :categories="$categories" />
    </main>
@endsection
