<x-layout :comms="$comms">
    <x-slot name="title">{{ $user->username }}</x-slot>

    <h1> {{ $user->username }} </h1>    

    <hr>

    <x-posts-list :posts="$posts" />
</x-layout>