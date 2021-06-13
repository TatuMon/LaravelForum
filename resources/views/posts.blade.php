@extends('layout')

@section('title')
    <title>Good Mambo: the front page of the Branca Team</title>
@endsection

@section('content')
    @if (count($posts))
        @foreach($posts as $post)
            <x-post-excerpt :post="$post" />
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
@endsection
