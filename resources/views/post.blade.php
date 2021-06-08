@extends('layout')

@section('title')
    <title> {{ $post->title }} </title>
@endsection

@section('content')
    <article>
        <div class="post-info">
            <span><a class="community_name" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
            <span>•</span>
            <span>posted by <a class="user_name" href="/usr/{{ $post->user->slug }}">{{ $post->user->username }}</a></span>
        </div>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </article>
@endsection