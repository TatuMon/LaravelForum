@props(['comm'])

<div id="comm-info">
    <h3>{{ $comm->name }}</h3>
    <p>{{ $comm->description }}</p>
    <p>Created {{ $comm->created_at->diffForHumans() }}</p>
    <p>Total posts: {{ $comm->posts_count }}</p>
</div>