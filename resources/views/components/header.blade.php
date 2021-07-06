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
            <button class="log"><a href="/login">LogIn</a></button>
            <button class="log"><a href="/register">SignUp</a></button>
        @else
            <span class="username">{{ auth()->user()->username }}</span>
            <form method="POST" action="/logout" id="logout">
                @csrf
                <button type="submit"><i class="fas fa-sign-out-alt"></i>logout</button>
            </form>
        @endguest
    </div>
</header>