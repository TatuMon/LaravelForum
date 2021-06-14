<x-layout :comms="$comms">
    <x-slot name="title"> {{ $name }} </x-slot>
    <h1> {{ $name }} </h1>    

    <hr>

    <x-posts-list :posts="$posts"/>
</x-layout>