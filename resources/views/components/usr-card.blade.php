@props(['usr'])

<div class="usr-card">
    <picture></picture>
    <h1><a href="/usr/{{ $usr->username }}">{{ $usr->username }}</a></h1>
</div>