<x-layout :comms="$comms">
    <x-slot name="title">{{ $post->title }} : {{ $post->community->name }}</x-slot>

    <div id="up-container">
        <article>
            <div class="post-info" x-data="{show : false}">
                <span><a class="community_name underline" href="/comm/{{ $post->community->slug }}">comm/{{ $post->community->name }}</a></span>
                <span>•</span>
                <span>posted by <a class="user_name underline" href="/usr/{{ $post->user->slug }}">{{ $post->user->username }}</a></span>
                <span>{{ $post->created_at->diffForHumans() }}</span>
                @auth
                    @if(auth()->user()->role == 'Black Hand of Branca' || $post->user->id == auth()->user()->id)
                        <div id="post-opts">
                            <span class="danger" @click="show = !show">Delete</span>
                            {{-- <form method="POST" action="/delete" x-show="show" @click.away="show = !show" id="delete-post">
                                    @csrf
                                    <span style="position: absolute; right: 10px; top: 0px; cursor: pointer" @click="show = !show">X</span>
                                    <h1>Sure you want to delete this post?</h1>
                                    <p><i>"{{ $post->title }}"</i></p>
                                    <p>Once deleted, you can't get it back</p>
                                    <input type="text" name="post" value="{{ $post->id }}" x-show="false"/>
                                    <input type="submit" value="Delete" class="danger"/>
                                </form> --}}
                            <a href="{{$post->slug}}/editor" class="edit-btn">Edit</a>
                        </div>
                    @endif
                @endauth
            </div>
            <h1>{{ $post->title }}</h1>
            <p>{!! FormatStr::keepEnters($post->body) !!}</p>

            <x-make-comment :post="$post"/>

            @if(count($comments))
                @foreach($comments as $comment)
                <x-comment :comment="$comment"/>
                @endforeach
            @else
                <div>
                    <h2>No comments yet :c</h2>    
                </div>    
            @endif
        </article>
    </div>
</x-layout>

