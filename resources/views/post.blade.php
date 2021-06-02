@extends('layout')

@section('title')
    <title> {{ $post->getTitle() }} </title>
@endsection

@section('content')
    <article>
            <h1>{{ $post->getTitle() }}</h1>
            {!! $post->getBody() !!} 
    </article>
    <a href="/">Go back</a>
@endsection