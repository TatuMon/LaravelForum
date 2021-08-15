<head>
    <title>Registration</title>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/session.css">
</head>

<body>
    <section id="session">
        <h1>Registration</h1>
        <a id="logo" href="/"><img src="{{asset('image/branca-logo.png')}}"></a>
        <form method="POST" action="/register" id="session-form">
            @csrf
            <div class="input first">
                <label for="username">username</label>
                <input name="username" id="username" type="text" value="{{ old('username') }}" autocomplete="username" required>
            </div>

            <div class="input">
                <label for="email">e-mail</label>
                <input name="email" id="email" type="email" value="{{ old('email') }}" autocomplete="email" required>
            </div>

            <div class="input">
                <label for="password">password</label>
                <input name="password" id="password" type="password" autocomplete="password" required>
            </div>

            <div class="input">
                <label for="password_confirmation">confirm password</label>
                <input name="password_confirmation" id="password" type="password" required>
            </div>

            <input class="submit" type="submit" value="SUBMIT" style="cursor: pointer">
        
            <x-user-form/>
        </form>
        <a href="/login" style="color: whitesmoke; text-align: center">Or you can LogIn</a>
    </section>
</body>