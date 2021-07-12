<div class="comment-creator-box">
    @auth
        <span class="comment-as">Comment as <span style="color: #33a8ff">{{ auth()->user()->username }}</span></span>
    @else
        <span class="comment-as">Login to comment</span>
    @endauth
    
    <textarea class="comment-creator">
    </textarea>
</div>