@props(['posts', 'usrs'])

@isset($usrs)
    @foreach($usrs as $usr)
        <x-usr-card :usr="$usr" />
    @endforeach
@endisset

<a href="/create-post" class="btn">Create post</a> 

@if(count($posts))
    @foreach($posts as $post)
        <x-post-card :post="$post" />
    @endforeach
@else
    <h1 class="no_posts_alert">No posts were found :(</h1>
@endif