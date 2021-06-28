<section>
    <h1>Registration</h1>
    <form method="POST" action="/register">
        @csrf

        <label for="username">username</label>
        <input name="username" id="username" type="text" required>
        
        <label for="email">e-mail</label>
        <input name="email" id="email" type="email" required>

        <label for="password">Password</label>
        <input name="password" id="password" type="password" required>

        <input type="submit" value="Submit">
    </form>
</section>