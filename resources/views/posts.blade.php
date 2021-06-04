@extends('layout')

@section('title')
    <title>Laracast Course</title>
@endsection

@section('content')
    @if (count($posts))
        @foreach($posts as $post)
        <article>
            <h1 class="title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h3 class="community_name"><a href="/comm/{{ $post->community->slug }}"> {{ $post->community->name }} </a></h3>
            <p class="excerpt">{!! $post->body !!}</p>
            <i class="date">{{ $post->published_at }}</i>
            <hr>
        </article>
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
@endsection
