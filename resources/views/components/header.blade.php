<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.0.1/dist/cdn.min.js"></script>
</head>

<header>
    <div class="logo">
        <a href="/"><img src="{{asset('image/branca-logo.png')}}" alt="logo"></a>
    </div>

    <x-comm-dropdown />

    <div class="user-search-bar">
        <form method="GET" action="" class="search-form">
            <input
            type="search"
            name="search"
            spellcheck="false"
            placeholder="Search for a user or a post"
            class="search"
            value="{{ request('search') }}"
            >
        </form>
    </div>

    <div id="header-user">
        <i class="fab fa-github github"></i>

        <div class="user">
            @guest
                <a href="/login"><button class="log">LogIn</button></a>
                <a href="/register"><button class="log">SignUp</button></a>
            @else
                <x-usr-dropdown/>
            @endguest
        </div>
    </div>

    <x-mediaquery-header />
</header>