<x-layout>
    <x-slot name="title">{{ $post->name }}</x-slot>

    <section id="post-editor">
        <form action="edit" method="POST">
            @csrf
            <input type="title" name="title" id="post-title" value="{{ $post->title }}">
            <textarea name="body" id="post-body" wrap="hard">{!! $post->body !!}</textarea>
            <input id="submit" type="submit" value="Edit"/>
        </form>
    </section>
</x-layout>