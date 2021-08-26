@props(['usr'])

<div class="usr-card">
    <a href="/usr/{{ $usr->username }}"><img id="profile-pic" src="{{ asset('profile-pics/' . $usr->pic) }}"/></a>
    <h1><a href="/usr/{{ $usr->username }}">{{ $usr->username }}</a></h1>
</div>