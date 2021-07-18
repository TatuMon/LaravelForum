@if(session()->has('error'))
    <div x-data="{ show:true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="error" id="error">
        <p>{{ session('error') }}</p>
    </div>
@endif