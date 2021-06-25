@extends('layouts.app')
@section('content')
<br><br><br>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Simple Tools To Convert">
    <meta name="author" content="Polinema">

    <!-- Webpage Title -->
    <title>Simple App To Convert, Make it all easy! </title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/convert.css" rel="stylesheet">
    <link href="css/upload.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <script src="../../code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../../unpkg.com/popper.js%401.16.1/dist/umd/popper.min.js"></script>

    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="sc-17y9jfw-2 lpnhkH">Result</h1>
        <h2 class="sc-17y9jfw-3 lpvDOQ">Don't hesitate to use our website again</h2>
        <br>
        <textarea style="position:center;background-color:antiquewhite" id="image-text" rows="15" cols="140"></textarea>
        <progress id="progressbar" min="0" max="1" value="0" />

    </div>

    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ©2021 <a href="https://Polinema.ac.id">Machine Learning Group</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->
</body>