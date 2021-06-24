@extends('layouts.app')
@section('content')
<br><br><br>
<html lang="en">


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
    <div class="sc-1ttxsn1-0 fxCLCz" id="tools" style="padding-left: 100px;">
        <div class="sc-1ttxsn1-1 hvHwmD">
            <div class="sc-17y9jfw-1 lpeKGy">
                <div class="sc-17y9jfw-5 qNym">
                    <div class="sc-1gyxcpm-0 csDfHB sc-17y9jfw-4 iqUd" style="width:32px;height:32px"><svg viewBox="0 0 32 32" fill="none" xmlns="../www.w3.org/2000/svg.html">
                            <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V28C32 30.2091 30.2091 32 28 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F23030"></path>
                            <path d="M7.68718 7.68718L15.8787 9.73507L16 9.76539L16.1213 9.73507L24.3128 7.68718L22.2649 15.8787L22.2346 16L22.2649 16.1213L24.3128 24.3128L16.1213 22.2649L16 22.2346L15.8787 22.2649L7.68718 24.3128L9.73507 16.1213L9.76539 16L9.73507 15.8787L7.68718 7.68718Z" stroke="white"></path>
                        </svg></div>
                    <h1 class="sc-17y9jfw-2 lpnhkH">Convert Image To Text</h1>
                </div>
                <h2 class="sc-17y9jfw-3 lpvDOQ" style="font-size: 20px;padding-right: 18px;">Convert Your Image To Text</h2>
            </div>
        </div>
    </div>

    <!-- UPLOAD -->
    <div class="zone" >

        <div id="dropZ">
            <i class="fa fa-cloud-upload"></i>
            <div>Drag and drop your Image here</div>
            <span>OR</span>
            <div class="selectFile">
                <label for="file">Select Image</label>
                <input type="file" name="files[]" id="file">
            </div>
            <p>OCR JS Working Properly</p>
        </div>

    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>


    <!-- END UPLOAD -->

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
<!-- JAVASCRIPT OCR -->
<script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
<!-- JAVASCRIPT OCR END -->

<script>
    //PROGRESS BAR PROCESS

    document.addEventListener('DOMContentLoaded', function() {
        var input_image = document.getElementById('file');
        input_image.addEventListener('change', handleInputChange);
    });

    function handleInputChange(event) {
        var input = event.target;
        var file = input.files[0];
        console.log(file);
        Tesseract.recognize(file)
            .progress(function(message) {
                document.getElementById('progressbar').value = message.progress;
                console.log(message);
            })
            .then(function(result) {
                var contentArea = document.getElementById('image-text');
                contentArea.innerHTML = result.text;
                console.log(result);
            })
            .catch(function(err) {
                console.error(err);
            });
    }
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<html>