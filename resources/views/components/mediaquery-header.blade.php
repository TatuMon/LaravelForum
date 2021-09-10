<div id="mobile-menu-dropdown" x-data="{show : false}" @click.away="show = false">
    <div @click="show=!show">
        <i class="fas fa-bars"></i>
        <div x-show="show" id="mobile-menu">
            <div class="mobile-user">
                @guest
                    <a href="/login"><button class="mobile-log">LogIn</button></a>
                    <a href="/register"><button class="mobile-log">SignUp</button></a>
                @else
                    <div><a href="/usr/{{ auth()->user()->username }}">Profile</a></div>
                    <form method="POST" action="/logout" id="logout">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endguest
            </div>
            <i class="fab fa-github github-mobile"></i>
        </div>
    </div>
</div>