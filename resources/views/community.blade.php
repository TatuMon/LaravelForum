@extends('layout')

@section('title')
    <title>{{ $name }}</title>
@endsection

@section('content')
    <h1> {{ $name }} </h1>    

    <hr>

    @if (count($posts))
        @foreach($posts as $post)
            <article>
                <div class="post-info">
                    <span>comm/{{ $name }}</span>
                    <span>•</span>
                    <span>posted by <a class="user_name" href="/usr/{{ $post->user->slug }}">{{ $post->user->username }}</a></span>
                </div>
                <a href="/post/{{ $post->slug }}"><h3 class="title">{{ $post->title }}</h3></a>
                <a href="/post/{{ $post->slug }}"><p class="excerpt">{!! $post->body !!}</p></a>
                <i class="date">{{ $post->published_at }}</i>
            </article>
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
@endsection