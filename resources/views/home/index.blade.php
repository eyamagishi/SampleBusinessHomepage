@extends('layouts.app')

@section('title')
    {{ __('messages.title_home_index') }}
@endsection

@section('mainimg')
    @include('partials.mainimg')
@endsection

@section('content')
    <main>
        <x-information :informations="$informations" />
        <x-what-is-new :newsItems="$newsItems" />
    </main>
@endsection
