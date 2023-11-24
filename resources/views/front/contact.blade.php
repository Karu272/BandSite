<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b40f80a2a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/front/stylecontact.css') }}">
    <title>The Cruel Intentions Official Page</title>
    <meta name="description" content="This is the official page of the sleazerock band The Cruel Intentions">
    <meta name="keywords" content="Sleaze Rock Band, Glam Rock Music, Rock and Roll, Band Tour Dates, Hard Rock, Rock 'n' Roll Rebels, Live Performances, Vintage Rock Sound"></head>
</head>

<body
    style="background-image: linear-gradient(to bottom, rgba(23,26,45,1) 0%, rgba(0,0,0,0) 89%, rgba(0,0,0,1) 100%), url({{ asset('images/TCI2bl.jpg') }});">
    <header>
        <nav class="navbar">
            <a href="{{ url('/') }}" class="nav-logo"
                style="background-image: url({{ asset('images/TCI-Logo-White.png') }});" alt="Logo"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link" tabindex="1">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/bio') }}" class="nav-link" tabindex="2">BIO</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index') }}#news" class="nav-link" tabindex="3">NEWS</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link" tabindex="4">CONTACT</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <div class="booking" tabindex="5">
        <h1>BOOKING</h1>
        <div class="underline"></div>
        <div class="mail">mats.wernerson@gmail.com</div>
    </div>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 The Cruel Intentions</p>
        </div>
    </footer>
    <script src="{{ url('js/front/script_contact.js') }}"></script>
</body>

</html>
