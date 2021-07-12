<div class="comment-creator-box">
    @auth
        <span class="comment-as">Comment as <span style="color: #33a8ff">{{ auth()->user()->username }}</span></span>
    @else
        <span class="comment-as">Login to comment</span>
    @endauth
    
    <form method="POST" action="postComment">
        @csrf
        <textarea name="content" class="comment-creator" placeholder="What are you thoughts?"></textarea>
        <button type="submit" class="submit-comment">comment</button>
    </form>
</div>