@props(['comm'])

<div id="comm-info">
    <p id="comm-desc">{{ $comm->description }}</p>
    <p id="comm-date">Created on {{ $comm->created_at->format('d-m-Y') }}</p>
    <p id="comm-posts-amount">Total posts: {{ $comm->posts->count() }}</p>
</div>