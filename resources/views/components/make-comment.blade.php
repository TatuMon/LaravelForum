@props(['post'])

<div class="comment-creator-box">
    @auth
        <span class="comment-as">Comment as <span style="color: #33a8ff">{{ auth()->user()->username }}</span></span>
    @else
        <span class="comment-as">Login to comment</span>
    @endauth
    
    <form method="POST" action="/post/{{ $post->slug }}/comment">
        @csrf
        <textarea name="content" class="comment-creator" placeholder="What are you thoughts?" value="{{ old('content') }}" wrap="hard" required></textarea>
        
        @error('content')
            <span>{{ $message }}</span>
        @enderror
        
        @auth
            <button type="submit" class="submit-comment">comment</button>    
        @endauth
    </form>
</div>