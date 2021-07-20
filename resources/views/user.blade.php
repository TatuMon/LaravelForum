<x-layout :comms="$comms">
    <x-slot name="title">{{ $user->username }}</x-slot>
    <div id="main-info">
        <div id="prof-title">
            <img src="{{ asset('profile-pics/' . $user->pic) }}" alt="" id="profile-pic">
            <div>
                <h1 class="prof-usr"> usr/{{ $user->username }} </h1>
                <span class="prof-role">{{ $user->role }}</span>
            </div>
        </div>
        
        @auth
            <div id="options">
                @if(auth()->user()->role == "Black Hand of Branca" && $user->id != 7)
                    <!-- Open dropdown menu with a list of the available roles -->
                    <form method="POST" action="/giveRol" x-data="{showbtn : false, showusr : false}" id="give-rol-form">
                        @csrf
                        <select name="role" id="giveRole" class="admin" @change="showbtn = true" @click.away="showbtn = false" required>
                            <option selected disabled>Give Role</option>
                            <option value="Branca Seneschal">Branca Seneschal</option>
                            <option value="Branca Soldier">Branca Soldier</option>
                            <option value="Townsman">Townsman</option>
                        </select>
                        <input type="text" value="{{ $user->id }}" name="user" x-show="showusr"/>
                        <input type="submit" value="Give" x-show="showbtn" id="give-rol"/>
                    </form>
                    <!-- Bans the user and sets the role to BANNED -->
                    <!-- If already banned, the button change to 'Unban' -->
                    @if($user->role != 'BANNED')
                        <form method="POST" action="/ban" x-data="{show : false}">
                            @csrf
                            <input type="text" name="user" value="{{ $user->id }}" x-show="show"/>
                            <input type="submit" value="Ban" class="danger admin"/>
                        </form>
                    @else
                        <form method="POST" action="/unban" x-data="{show : false}">
                            @csrf
                            <input type="text" name="user" value="{{ $user->id }}" x-show="show"/>
                            <input type="submit" value="Unban" class="danger admin"/>
                        </form>
                    @endif
                @endif
            </div>
        @endauth
    </div>   
    <hr>
    <div id="up-container">
        <x-posts-list :posts="$posts" />
    </div>
</x-layout>