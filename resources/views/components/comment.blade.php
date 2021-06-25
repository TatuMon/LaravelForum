@props(['comment'])

<section>
    <div>
        <span><a class="user_name" href="/usr/{{ $comment->user->slug }}">{{ $comment->user->username }}</a></span>
        <span>•</span>
        <span>{{ $comment->created_at->diffForHumans() }}</span>
    </div>
    <p>{{ $comment->content }}</p>
</section>