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
        <button>LogIn</button>
        <button>SignUp</button>
    </div>
</header>