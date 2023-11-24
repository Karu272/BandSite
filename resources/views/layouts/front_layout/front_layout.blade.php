<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{url('css/front/style.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
  <title>The Cruel Intentions Official Page</title>
  <meta name="description" content="This is the official page of the sleazerock band The Cruel Intentions">
  <meta name="keywords" content="Sleaze Rock Band, Glam Rock Music, Rock and Roll, Band Tour Dates, Hard Rock, Rock 'n' Roll Rebels, Live Performances, Vintage Rock Sound"></head>
<body>
    <!--Header===================================================-->
    @include('layouts.front_layout.front_header')
    <!--/Header===================================================-->
    <!--Mid part===================================================-->
    @yield('content')
    <!--/Mid part===================================================-->
    <!--Footer=============================================-->
    @include('layouts.front_layout.front_footer')
    <!--/Footer=============================================-->

  <script src="{{url('js/front/script.js')}}"></script>
</body>

</html>
