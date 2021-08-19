@props(['comm'])

<div id="comm-info">
    <h3 id="comm-name">{{ $comm->name }}</h3>
    <p id="comm-desc">{{ $comm->description }}</p>
    <p id="comm-created-at">Created {{ $comm->created_at->diffForHumans() }}</p>
    <p id="comm-posts">Total posts: {{ $comm->posts_count }}</p>
</div>