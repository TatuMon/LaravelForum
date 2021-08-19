<x-layout :comms="$comms" :actualComm="$actualComm">
    <x-slot name="title">Good Mambo: the front page of the Branca Team</x-slot>
    <div id="up-container">
        <x-posts-list :posts="$posts" :usrs="$usrs"/>
    </div>
</x-layout>
