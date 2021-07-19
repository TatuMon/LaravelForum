<x-layout :comms="$comms">
    <x-slot name="title">{{ $user->username }}</x-slot>
    <div id="main-info">
        <img src="{{ asset('profile-pics/' . $user->pic) }}" alt="" id="profile-pic">
        <div>
            <h1 class="prof-usr"> usr/{{ $user->username }} </h1>
            <span class="prof-role">{{ $user->role }}</span>
        </div>
        
        <div id="options">
            @if (auth()->user()->role == "Black Hand of Branca")
                <button>Give role</button>
                <button>Ban</button>
            @endif
        </div>
    </div>   
    <hr>
    <x-posts-list :posts="$posts" />
</x-layout>