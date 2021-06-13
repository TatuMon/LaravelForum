<x-layout>
    <x-slot name="title">{{ $user->username }}</x-slot>

    <h1> {{ $user->username }} </h1>    

    <hr>

    @if (count($user->posts))
        @foreach($user->posts as $post)
            <article>
                <div class="post-info">
                    <span><a class="community_name" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
                    <span>•</span>
                    <span>posted by {{ $user->username }}</span>
                </div>
                <a href="/post/{{ $post->slug }}"><h3 class="title">{{ $post->title }}</h3></a>
                <a href="/post/{{ $post->slug }}"><p class="excerpt">{!! $post->body !!}</p></a>
                <i class="date">{{ $post->published_at }}</i>
            </article>
        @endforeach
    @else
        <h1 class="no_posts_alert">No posts were found :(</h1>
    @endif

</x-layout>