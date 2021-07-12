<div class="comment-creator-box">
    @auth
        <span class="comment-as">Comment as {{ auth()->user->username }}</span>
    @else
        <span class="comment-as">Login to comment</span>
    @endauth
    
    <textarea class="comment-creator">
    </textarea>
</div>