<header>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="nav-logo"
            style="background-image:url({{ asset('images/TCI-Logo-White.png') }});"></a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="{{ url('/bio') }}" class="nav-link" tabindex="1">BIO</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('index') }}#news" class="nav-link" tabindex="2">NEWS</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contact') }}" class="nav-link" tabindex="3">CONTACT</a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>
<div class="page1">
    <img src="{{ asset('images/TCI-test1.jpg') }}" alt="En bild" class="band-bild">
    <a href="{{ url('/') }}"><img src="{{ asset('images/TCI-Logo-White.png') }}" alt="logo" class="logo"></a>
    <a href="{{ url('/bio') }}" class="bio-link" tabindex="1">BIO</a>
    <a href="{{ route('index') }}#news" class="news-link" tabindex="2">NEWS</a>
    <a href="{{ url('/contact') }}" class="contact-link" tabindex="3">CONTACT</a>
    <a href="https://www.facebook.com/thecruelintentions" target="_blank" class="fb-link"
        onmouseover="this.children[0].src='{{ asset('images/fb2.png') }}';"
        onmouseout="this.children[0].src='{{ asset('images/fb.png') }}';">
        <img class="icon-img2" id="fb" src="{{ asset('images/fb.png') }}" alt="Facebook" tabindex="4">
    </a>
    <a href="https://www.instagram.com/thecruelintentionsofficial/" target="blank" class="insta-link"
        onmouseover="this.children[0].src='{{ asset('images/insta2.png') }}';"
        onmouseout="this.children[0].src='{{ asset('images/insta.png') }}';"><img class="icon-img2" id="insta"
            src="{{ asset('images/insta.png') }}" alt="Instagram" tabindex="5"></a>
    <a href="https://open.spotify.com/artist/3RKn3P56kkewba1s6QpyDk?si=qZaY6wQhRMSSgX DG_Zmh4Q" target="blank"
        class="spoti-link" onmouseover="this.children[0].src='{{ asset('images/spoty2.png') }}';"
        onmouseout="this.children[0].src='{{ asset('images/spoty.png') }}';"><img class="icon-img2" id="spoti"
            src="{{ asset('images/spoty.png
                                                      ') }}" alt="Spotify" tabindex="6"></a>
    <a href="https://www.youtube.com/@TheCruelIntentions" target="blank" class="yt-link"
        onmouseover="this.children[0].src='{{ asset('images/yt2.png') }}';"
        onmouseout="this.children[0].src='{{ asset('images/yt.png') }}';"><img class="icon-img2" id="yt"
            src="{{ asset('images/yt.png') }}" alt="Youtube" tabindex="7"></a>
    <a href="https://shop.merchants.se/cruel-intentions-the/" target="blank"><button class="merchKnapp"><img class="merch-img" src="{{ asset('images/shirt.png') }}" alt="MERCHANDISE Button" tabindex="8">&nbsp;MERCHANDISE</button></a>
</div>
