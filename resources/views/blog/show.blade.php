@extends('layouts.base')

@section('content')

    <x-section class="container mx-auto">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('blog.index') }}">Back to Blog</a>
    </x-section>

@endsection
