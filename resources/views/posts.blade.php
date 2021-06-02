@extends('layout')

@section('title')
    <title>Laracast Course</title>
@endsection

@section('content')
    @foreach($posts as $post)
    <article>
        <h1 class="title"><a href="/post/{{ $post->getSlug() }}">{{ $post->getTitle() }}</a></h1>
        <p class="excerpt">{!! $post->getBody() !!}</p>
        <i class="date">{{ $post->getDate() }}</i>
        <hr>
    </article>
    @endforeach
@endsection
