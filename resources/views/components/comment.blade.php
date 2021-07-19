@props(['comment'])

<section class="comment-box">
    <div class="info">
        <span><img src="{{ asset("profile-pics/" . $comment->user->pic) }}" alt="" class="user-logo"></span>
        <span><a class="user_name" href="/usr/{{ $comment->user->slug }}">{{ $comment->user->username }}</a></span>
        <span>•</span>
        <span>{{ $comment->created_at->diffForHumans() }}</span>
    </div>
    <p>{{ $comment->content }}</p>
    <a href="/respond"><button class="respond">respond</button></a>
</section>