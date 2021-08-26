@error('username')
            <p style="color: #ED4337; font-size: 15px">{{ $message }}</p>
@enderror

@error('email')
    <p style="color: #ED4337; font-size: 15px">{{ $message }}</p>
@enderror

@error('password')
    <p style="color: #ED4337; font-size: 15px">{{ $message }}</p>
@enderror

@error('password_confirmation')
    <p style="color: #ED4337; font-size: 15px">{{ $message }}</p>
@enderror