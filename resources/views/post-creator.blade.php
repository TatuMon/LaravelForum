<x-layout :comms="$comms">
    <x-slot name="title">Create your post</x-slot>
    <body>
        <section id="creator">
            <h1>Create your post</h1>
            <form method="POST" action="/create" id="post-form">
                @csrf
                <label for="comm"></label>
                <select name="comm" class="select" required>
                    <option selected disabled value="">Where you want to upload this post?</option>
                    @foreach ($comms as $comm)
                        <option value="{{ $comm->id }}">{{ $comm->name }}</option>
                    @endforeach
                </select>

                <label for="title">Title</label>
                <input type="text" name="title" id="post-title" autocomplete="off" required>

                <label for="title">Body</label>
                <textarea name="title" required></textarea>

                <input type="submit" value="Submit post"/>
            </form>
        </section>
    </body>
</x-layout>