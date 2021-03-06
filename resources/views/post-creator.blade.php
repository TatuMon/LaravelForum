<x-layout>
    <x-slot name="title">Create your post</x-slot>
    <body>
        <section id="creator">
            <h1>Create your post</h1>
            <form method="POST" action="/create" id="post-form">
                @csrf
                <label for="comm"></label>
                <select name="comm" class="select" id="select-comms" required>
                    <option selected disabled value="">Where you want to upload this post?</option>
                </select>

                <label for="title">Title</label>
                <input type="text" name="title" id="post-title" autocomplete="off" maxlength="50" value="{{ old('title') }}"  required>

                <label for="body">Body</label>
                <textarea name="body" wrap="hard" required style="white-space: pre-wrap"></textarea>

                <input id="submit" type="submit" value="Submit post"/>

                @error('comm')
                    <p class="error-msg">{{ $message }}</p>
                @enderror

                @error('title')
                    <p class="error-msg">{{ $message }}</p>
                @enderror

                @error('body')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </form>
        </section>
    </body>
</x-layout>