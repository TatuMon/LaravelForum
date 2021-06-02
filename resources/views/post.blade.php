@extends('layout')

@section('title')
    <title> {{ $post->title }} </title>
@endsection

@section('content')
    <article>
            <h1>{{ $post->title }}</h1>
            {!! $post->body !!} 
    </article>
    <a href="/">Go back</a>
@endsection