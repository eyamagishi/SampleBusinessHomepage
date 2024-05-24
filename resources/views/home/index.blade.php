@extends('layouts.app')

@section('title')
   ブログ記事一覧のページ
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