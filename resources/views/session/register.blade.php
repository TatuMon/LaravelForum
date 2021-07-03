<head>
    <title>Registration</title>

    <link rel="stylesheet" href="/session.css">
</head>

<body>
    <section id="session">
        <h1>Registration</h1>
        <form method="POST" action="/register" id="session-form">
            @csrf
            <div class="input first">
                <label for="username">username</label>
                <input name="username" id="username" type="text" value="{{ old('username') }}" required>
            </div>

            <div class="input">
                <label for="email">e-mail</label>
                <input name="email" id="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="input">
                <label for="password">password</label>
                <input name="password" id="password" type="password" required>
            </div>

            <div class="input">
                <label for="password_confirmation">confirm password</label>
                <input name="password_confirmation" id="password" type="password" required>
            </div>

            <input class="submit" type="submit" value="SUBMIT">
        
            <x-user-form/>
        </form>
    </section>
</body>