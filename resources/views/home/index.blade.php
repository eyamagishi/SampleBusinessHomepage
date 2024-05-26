@extends('layouts.app')

@section('title')
    {{ __('messages.home_index_title') }}
@endsection

@section('mainimg')
    @include('partials.mainimg')
@endsection

@section('content')
    <main>
        <x-information />
        <x-what-is-new />
    </main>
@endsection
