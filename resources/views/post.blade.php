<x-layout :comms="$comms">
    <x-slot name="title">{{ $post->title }} : {{ $post->community->name }}</x-slot>

    <article>
        <div class="info">
            <span><a class="community_name" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
            <span>•</span>
            <span>posted by <a class="user_name" href="/usr/{{ $post->user->slug }}">{{ $post->user->username }}</a></span>
            <span>{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>

        <x-make-comment />

        @if(count($comments))
            @foreach($comments as $comment)
            <x-comment :comment="$comment"/>
            @endforeach
        @else
            <div>
                <h2>No comments yet :c</h2>    
            </div>    
        @endif
    </article>
</x-layout>

