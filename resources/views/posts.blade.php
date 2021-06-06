@extends('layout')

@section('title')
    <title>Laracast Course</title>
@endsection

@section('content')
    @if (count($posts))
        @foreach($posts as $post)
            <article>
                <div class="post-info">
                    <span><a class="community_name" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
                    <span>•</span>
                    <span>posted by <a class="user_name" href="/usr/{{ $post->user->name }}">{{ $post->user->name }}</a></span>
                </div>
                <a href="/post/{{ $post->slug }}"><h1 class="title">{{ $post->title }}</h1></a>
                <a href="/post/{{ $post->slug }}"><p class="excerpt">{!! $post->body !!}</p></a>
                <i class="date">{{ $post->published_at }}</i>
            </article>
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
@endsection
