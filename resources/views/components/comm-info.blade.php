@props(['comm'])

<div id="comm-info">
    <h3 id="comm-name">{{ $comm->name }}</h3>
    <p id="comm-desc">{{ $comm->description }}</p>
    <hr>
    <p id="comm-date">Created on {{ $comm->created_at->format('d-m-Y') }}</p>
    <p id="comm-posts-amount">Total posts: {{ $comm->posts->count() }}</p>
</div>