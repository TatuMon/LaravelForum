@extends('layout')

@section('title')
    <title>Laracast Course</title>
@endsection

@section('content')
    @foreach($posts as $post)
    <article>
        <h1 class="title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <p class="excerpt">{!! $post->body !!}</p>
        <i class="date">{{ $post->published_at }}</i>
        <hr>
    </article>
    @endforeach
@endsection
