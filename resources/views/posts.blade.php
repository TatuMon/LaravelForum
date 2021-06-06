@extends('layout')

@section('title')
    <title>Laracast Course</title>
@endsection

@section('content')
    <div id="main-container" class="main-container">
    @if (count($posts))
        @foreach($posts as $post)
        <article>
            <a href="/post/{{ $post->slug }}">
                <a class="community_name" href="/comm/{{ $post->community->slug }}">{{ $post->community->name }}</a>
                <h1 class="title">{{ $post->title }}</h1>
                <p class="excerpt">{!! $post->body !!}</p>
                <i class="date">{{ $post->published_at }}</i>
            </a>
        </article>
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
    </div>
@endsection
