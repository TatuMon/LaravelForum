@props(['comment'])

<section class="comment-box">
    <div class="info">
        <span><img src="{{ asset("profile-pics/" . $comment->user->pic) }}" alt="" class="user-logo"></span>
        <span><a class="user_name" href="/usr/{{ $comment->user->slug }}">{{ $comment->user->username }}</a></span>
        <span>•</span>
        <span>{{ $comment->created_at->diffForHumans() }}</span>
        @auth
            @if (auth()->user()->role == 'Black Hand of Branca' || $comment->user->id == auth()->user()->id)
                <!-- EVITAR QUE CAMBIANDO EL ID SE PUEDA BORRAR OTRO COMENTARIO QUE NO SEA EL ELEGIDO -->
                <span class="delete-comment" id="{{ $comment->id }}" data-token="{{ csrf_token() }}"><i class="far fa-trash-alt"></i></span>
            @endif
        @endauth
    </div>
    <p class="comment-body">{!! $comment->content !!}</p>
</section>