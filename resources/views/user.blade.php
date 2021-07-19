<x-layout :comms="$comms">
    <x-slot name="title">{{ $user->username }}</x-slot>
    <div id="main-info">
        <img src="https://i.pravatar.cc/50" alt="" id="profile-pic">
        <div>
            <h1 class="prof-usr"> usr/{{ $user->username }} </h1>
            <span class="prof-role">{{ $user->role }}</span>
        </div>     
    </div>   
    <hr>
    <x-posts-list :posts="$posts" />
</x-layout>