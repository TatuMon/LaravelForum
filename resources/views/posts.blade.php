<x-layout>
    <x-slot name="title">Good Mambo: the front page of the Branca Team</x-slot>
    @if (count($posts))
        @foreach($posts as $post)
            <x-post-card :post="$post" />
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif
</x-layout>
