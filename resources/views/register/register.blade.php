<section>
    <h1>Registration</h1>
    <form method="POST" action="/register">
        @csrf

        <label for="username">username</label>
        <input name="username" id="username" type="text" value="{{ old('username') }}" required>
        
        <label for="email">e-mail</label>
        <input name="email" id="email" type="email" value="{{ old('email') }}" required>

        <label for="password">Password</label>
        <input name="password" id="password" type="password" required>

        <label for="password_confirmation">Password</label>
        <input name="password_confirmation" id="password" type="password" required>

        <input type="submit" value="Submit">
    
        <x-user-form/>
    </form>
</section>