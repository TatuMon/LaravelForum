<head>
    <title>Change Profile Pic</title>

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

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <section id="session">
        <h1>Change your profile pic</h1>
        <div>
            <h3>This is your actual profile pic</h3>
            <img src="{{ asset('profile-pics/' . auth()->user()->pic) }}" style="border-radius: 50%">
        </div>

        <form method="POST" action="/changePic" enctype="multipart/form-data" id="pic-changer-form">
            @csrf
            <label for="image">Choose your new image</label>
            <br>
            <input type="file" id="selectedFile" style="display: none;" required/>
            <input type="button" value="Browse..." onclick="document.getElementById('selectedFile').click();" />
            <br>
            <input type="submit" value="Send">

            @error('image')
            <p style="color: #ED4337; font-size: 15px">{{ $message }}</p>
            @enderror
        </form>
    </section>
</body>