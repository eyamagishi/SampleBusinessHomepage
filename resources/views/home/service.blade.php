@extends('layouts.app')

@section('title')
    {{ __('messages.title_home_service') }}
@endsection

@section('content')
    <main>
        <x-service />
    </main>
@endsection
