@props(['comms']);

<header>
    <div class="logo">
        <a href="/"><img src="{{asset('image/branca-logo.png')}}" alt="logo"></a>
    </div>

    <div class="community-filter" x-data="{show : false}" @click.away="show = false">
        <div @click="show = !show" class="dropdown-button">
            <i class="fas fa-users"></i>
            <i class="fas fa-caret-down"></i>
            <div x-show="show" class="communities-menu">
                @foreach ($comms as $comm)
                    <div><a href="/comm/{{ $comm->slug }}">{{ $comm->name }}</a></div>
                @endforeach
            </div>
        </div>
    </div>

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