@error('username')
    <p class="error-msg">{{ $message }}</p>
@enderror

@error('email')
    <p class="error-msg">{{ $message }}</p>
@enderror

@error('password')
    <p class="error-msg">{{ $message }}</p>
@enderror

@error('password_confirmation')
    <p class="error-msg">{{ $message }}</p>
@enderror