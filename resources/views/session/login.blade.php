<head>
    <title>Log In</title>

    <link rel="stylesheet" href="/session.css">
</head>

<body>
    <section id="session">
        <a id="logo"><img src="{{asset('image/branca-logo.png')}}"></a>
        <h1>Log In</h1>
        <form method="POST" action="/register" id="session-form">
            @csrf
            <div class="input first">
                <label for="username">username</label>
                <input name="username" id="username" type="text" value="{{ old('username') }}" required>
            </div>

            <div class="input">
                <label for="password">password</label>
                <input name="password" id="password" type="password" required>
            </div>

            <input class="submit" type="submit" value="SUBMIT">
        
            <x-user-form/>
        </form>
    </section>
</body>