<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b40f80a2a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/front/stylebio.css') }}">
    <title>The Cruel Intentions Official Page</title>
    <meta name="description" content="This is the official page of the sleazerock band The Cruel Intentions">
    <meta name="keywords" content="Sleaze Rock Band, Glam Rock Music, Rock and Roll, Band Tour Dates, Hard Rock, Rock 'n' Roll Rebels, Live Performances, Vintage Rock Sound"></head>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="{{ url('/') }}" class="nav-logo"
                style="background-image:url({{ asset('images/TCI-Logo-White.png') }});" alt="Logo"></a>
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
    <main>
        <div class="row">
            <div class="left">
                <img src="{{ asset('images/TCIweb1.jpg') }}" alt="Bild på The Cruel Intentions">
            </div>
            <div class="right">
                <div class="content">
                    <h1 tabindex="5">About us</h1>
                    <br>
                    <p>Serving you the perfect blend of melodrama and fun this Norwegian sleaze rock
                        band are ready to bring the best rock music, and make street R’n’R great again. For
                        what is rock but a homage to the legends!</p>

                    <p>The band was founded in 2015, by Mats Wernerson, Lizzy DeVine, Kristian Solhaug,
                        and Eiliv Sagrusten who has been replaced by Robin Nilsson on drums. All of which
                        have a widespread band experience.<br>
                        Notably, Lizzy DeVine lived several years in Los Angeles where he was the singer
                        and songwriter of Vains of Jenna, a band that got their breakthrough the American
                        era of Rock´n Reality tv with performances on shows like Jackass, Viva La Bam, and
                        Kat Von Dee’s LA Ink. This no-fucks-given culture has no doubt shaped DeVine and
                        his attitude towards music that is also evident in The Cruel Intentions music.</p>

                    <p>In technical terms, the band plays around the esthetics of bands such as Guns ‘N
                        Roses and Mötley Crue, and carries on the legacy of good old Rock ‘N Roll into the
                        contemporary youth of today. The songs are fast paced, humorous and at times
                        really hard-hitting.<br>
                        The result is feel good music with a fresh, original and modern expression, albeit
                        strong roots in rock history. Easy to love and to relate to.</p>

                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-container">
            <p>&copy; 2023 The Cruel Intentions</p>
        </div>
    </footer>
    <script src="{{ url('js/front/scriptbio.js') }}"></script>
</body>

</html>
