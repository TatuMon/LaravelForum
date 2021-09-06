<div id="usr-dropdown" x-data="{show : false}" @click.away="show = false">
    <div @click="show = !show" class="username">{{ auth()->user()->username }} <i class="fas fa-caret-down"></i></div>
    <div x-show="show" class="usr-options dropdown">
        <div><i class="fas fa-user"></i> <a href="/usr/{{ auth()->user()->username }}">Profile</a></div>
        <div><i class="fas fa-image"></i> <a href="/change-pic">Change profile pic</a></div>
        <form method="POST" action="/logout" id="logout">
            @csrf
            <button type="submit"><i class="fas fa-sign-out-alt"></i> logout</button>
        </form>
    </div>
</div>