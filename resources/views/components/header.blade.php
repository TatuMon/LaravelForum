@props(['comms']);

<header>
    <div class="logo">
        <a href="/"><img src="{{asset('image/branca-logo.png')}}" alt="logo"></a>
    </div>

    <x-comm-dropdown />

    <div class="user-search-bar">
        <form method="GET" action="">
            <input
            type="search"
            name="search"
            spellcheck="false"
            placeholder="Search for a user or a post"
            value="{{ request('search') }}"
            >
        </form>
    </div>

    <i class="fab fa-github github"></i>

    <div class="user">
        @guest
            <button><a href="/login">LogIn</a></button>
            <button><a href="/register">SignUp</a></button>
        @else
            <form method="POST" action="/logout">
                <button type="submit">LogOut</button>
            </form>
        @endguest
    </div>
</header>