<div id="mobile-menu-dropdown" x-data="{show : false}" @click.away="show = false">
    <div @click="show=!show">
        <i class="fas fa-bars"></i>
        <div x-show="show" id="mobile-menu">
            <div class="mobile-user">
                @guest
                    <a href="/login"><button class="mobile-log"><i class="fas fa-sign-in-alt"></i> LogIn</button></a>
                    <a href="/register"><button class="mobile-log"><i class="fas fa-user-plus"></i> SignUp</button></a>
                @else
                    <div><i class="fas fa-user"></i> <a href="/usr/{{ auth()->user()->username }}">Profile</a></div>
                    <div><i class="fas fa-image"></i> <a href="/change-pic">Change profile pic</a></div>
                    <form method="POST" action="/logout" id="logout">
                        @csrf
                        <button type="submit"><i class="fas fa-sign-out-alt"></i> logout</button>
                    </form>
                @endguest
            </div>
            <i class="fab fa-github github-mobile"></i>
        </div>
    </div>
</div>