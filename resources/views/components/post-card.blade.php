@props(['post'])

<article>
    <div class="post-info">
        <span><a class="community_name" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
        <span>•</span>
        <span>posted by <a class="user_name" href="/usr/{{ $post->user->username }}">{{ $post->user->username }}</a></span>
        <span>{{ $post->created_at->diffForHumans() }}</span>
    </div>
    <a href="/post/{{ $post->slug }}"><h1 class="title">{{ $post->title }}</h1></a>
    <a href="/post/{{ $post->slug }}"><p class="post-body">{!! $post->body !!}</p></a>
</article>