@extends('layouts.front_layout.front_layout')
@section('content')
    <div class="hidden-icons">
        <a href="https://www.facebook.com/thecruelintentions" target="blank"><img class="icon-img" src="{{asset('images/fb.png')}}" alt="Facebook"> </a>
        <a href="https://www.instagram.com/thecruelintentionsofficial/" target="blank"><img class="icon-img" src="{{asset('images/insta.png')}}" alt="Instagram"></a>
        <a href="https://open.spotify.com/artist/3RKn3P56kkewba1s6QpyDk?si=qZaY6wQhRMSSgX DG_Zmh4Q" target="blank"><img class="icon-img" src="{{asset('images/spoty.png
        ')}}" alt="Spotify"></a>
        <a href="https://www.youtube.com/@TheCruelIntentions" target="blank"><img class="icon-img" src="{{asset('images/yt.png')}}" alt="Youtube"></a>
    </div>
    <div class="hidden-merch-btn">
        <a href="https://shop.merchants.se/cruel-intentions-the/" target="blank"><button class="merchKnapp2"><img class="merch-img2" src="{{ asset('images/shirt.png') }}" alt="MERCHANDISE Button">&nbsp;MERCHANDISE</button></a>
    </div>
    <div style="margin-top: -5%; margin-bottom: 5%;" id="news"></div>
    <div class="page2"
        style="background-image: url({{ asset('images/TCI6.jpg') }});" alt="Background Image">
        <div class="upcomingshows">
            <h1 class="title-show" tabindex="1">UPCOMING SHOWS</h1>
            @foreach ($getLatestEvents as $events)
                <div class="solidLine"></div>
                <div class="tour-list1">
                    <div class="box">{{ $events['date'] }}</div>
                    <div class="box">{{ $events['country'] }}</div>
                    <div class="box">{{ $events['place'] }}</div>
                </div>
            @endforeach
        </div>
        <div class="solidLine"></div>
        <br>
        <div class="instacontainer">
            <div class="instafeed" tabindex="2">
                <div class="embedsocial-hashtag" data-ref="eca04559c6d653f7c67906120ac66c4311bcbb39"> <a
                        class="feed-powered-by-es feed-powered-by-es-feed-new"
                        href="https://embedsocial.com/social-media-aggregator/" target="_blank"
                        title="Widget by EmbedSocial" alt="Widget by EmbedSocial">
                        Widget by EmbedSocial<span>→</span> </a> </div>
            </div>
        </div>
    </div>
@endsection
