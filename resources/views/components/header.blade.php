<header>
    <div class="logo">
        <a href="/"><img src="{{asset('image/branca-logo.png')}}" alt="logo"></a>
    </div>

    <div class="community-filter" x-data="{show : false}">
        <div @click="show = !show" class="dropdown-button">
            <i class="fas fa-users"></i>
            <i class="fas fa-caret-down"></i>
            <div x-show="show" class="communities-menu">
                <div><a href="#">One</a></div>
                <div><a href="#">Two</a></div>
                <div><a href="#">Three</a></div>
            </div>
        </div>
    </div>

    <div class="user-search-bar">
        <form>
            <input type="search" spellcheck="false" placeholder="Search for communities">
        </form>
    </div>

    <i class="fab fa-github github"></i>

    <div class="user">
        <button>LogIn</button>
        <button>SignUp</button>
    </div>
</header>