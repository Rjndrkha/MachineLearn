@extends('layouts.convert')
@section('header')
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
    <link href="css/pilihan.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <script src="../../code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../../unpkg.com/popper.js%401.16.1/dist/umd/popper.min.js"></script>

    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>


</head>

<body>
    <div class="container pt-1">
        <h2>OCR with tesseract demo</h2>
        <h6>Recognize text from images in multiple languages.</h6>
        <a href="#help" data-toggle="collapse">Show help</a>
        <div class="collapse" id="help">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h4 class="card-title"><u>Help</u></h4>
                    <p class="card-text">
                        Select an image (gif, jpg, png or tiff) or PDF containing images on your computer to upload, and text in it will be recognized using <a href="https://github.com/tesseract-ocr">tesseract</a> with language settings from the dropdown box.
                    </p>
                </div>
            </div>
        </div>

        <form method="post" action="http://195.148.30.97/cgi-bin/ocr.py" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-auto">
                        <select class="bootstrap-select" name="lang">
                            <option value="fin" selected="selected">Finnish</option>
                            <option value="swe">Swedish</option>
                            <option value="afr">Afrikaans</option>
                            <option value="amh">Amharic</option>
                            <option value="ara">Arabic</option>
                            <option value="asm">Assamese</option>
                            <option value="aze">Azerbaijani</option>
                            <option value="aze-cyrl">Azerbaijani (Cyrillic)</option>
                            <option value="bel">Belarusian</option>
                            <option value="ben">Bengali</option>
                            <option value="bod">Tibetan Standard</option>
                            <option value="bos">Bosnian</option>
                            <option value="bul">Bulgarian</option>
                            <option value="cat">Catalan</option>
                            <option value="ceb">Cebuano</option>
                            <option value="ces">Czech</option>
                            <option value="chi-sim">Simplified Chinese</option>
                            <option value="chi-tra">Traditional Chinese</option>
                            <option value="chr">Cherokee</option>
                            <option value="cym">Welsh</option>
                            <option value="dan">Danish</option>
                            <option value="dan-frak">Danish (Fraktur)</option>
                            <option value="deu">German</option>
                            <option value="deu-frak">German Fraktur</option>
                            <option value="dzo">Dzongkha</option>
                            <option value="ell">Greek</option>
                            <option value="eng">English</option>
                            <option value="enm">Middle English</option>
                            <option value="epo">Esperanto</option>
                            <option value="equ">equations</option>
                            <option value="est">Estonian</option>
                            <option value="eus">Basque</option>
                            <option value="fas">Persian</option>
                            <option value="fra">French</option>
                            <option value="frk">Frankish</option>
                            <option value="frm">Middle French</option>
                            <option value="gle">Irish</option>
                            <option value="gle-uncial">Irish (Uncial)</option>
                            <option value="glg">Galician</option>
                            <option value="grc">Ancient Greek</option>
                            <option value="guj">Gujarati</option>
                            <option value="hat">Hatian</option>
                            <option value="heb">Hebrew</option>
                            <option value="hin">Hindi</option>
                            <option value="hrv">Croatian</option>
                            <option value="hun">Hungarian</option>
                            <option value="iku">Inuktitut</option>
                            <option value="ind">Indonesian</option>
                            <option value="isl">Icelandic</option>
                            <option value="ita">Italian</option>
                            <option value="ita-old">Old Italian</option>
                            <option value="jav">Javanese</option>
                            <option value="jpn">Japanese</option>
                            <option value="kan">Kannada</option>
                            <option value="kat">Georgian</option>
                            <option value="kat-old">Old Georgian</option>
                            <option value="kaz">Kazakh</option>
                            <option value="khm">Khmer</option>
                            <option value="kir">Kyrgyz</option>
                            <option value="kor">Korean</option>
                            <option value="kur">Kurdish</option>
                            <option value="lao">Lao</option>
                            <option value="lat">Latin</option>
                            <option value="lav">Latvian</option>
                            <option value="lit">Lithuanian</option>
                            <option value="mal">Malayalam</option>
                            <option value="mar">Marathi</option>
                            <option value="mkd">Macedonian</option>
                            <option value="mlt">Maltese</option>
                            <option value="msa">Malay</option>
                            <option value="mya">Burmese</option>
                            <option value="nep">Nepali</option>
                            <option value="nld">Dutch</option>
                            <option value="nor">Norwegian</option>
                            <option value="ori">Oriya</option>
                            <option value="osd">script and orientation</option>
                            <option value="pan">Punjabi</option>
                            <option value="pol">Polish</option>
                            <option value="por">Portuguese</option>
                            <option value="pus">Pashto</option>
                            <option value="ron">Romanian</option>
                            <option value="rus">Russian</option>
                            <option value="san">Sanskrit</option>
                            <option value="sin">Sinhala</option>
                            <option value="slk">Slovak</option>
                            <option value="slk-frak">Slovak Fractur</option>
                            <option value="slv">Slovenian</option>
                            <option value="spa">Spanish</option>
                            <option value="spa-old">Old Spanish</option>
                            <option value="sqi">Albanian</option>
                            <option value="srp">Serbian</option>
                            <option value="srp-latn">Serbian (Latin)</option>
                            <option value="swa">Swahili</option>
                            <option value="syr">Syriac</option>
                            <option value="tam">Tamil</option>
                            <option value="tel">Telugu</option>
                            <option value="tgk">Tajik</option>
                            <option value="tgl">Tagalog</option>
                            <option value="tha">Thai</option>
                            <option value="tir">Tigrinya</option>
                            <option value="tur">Turkish</option>
                            <option value="uig">Uyghur</option>
                            <option value="ukr">Ukranian</option>
                            <option value="urd">Urdu</option>
                            <option value="uzb">Uzbek</option>
                            <option value="uzb-cyrl">Uzbek (Cyrillic)</option>
                            <option value="vie">Vietnamese</option>
                            <option value="yid">Yiddish</option>

                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-auto">
                        <label for="input_image">Choose an Image File:</label>
                        <input type="file" id="input_image" name="input_image" />
                    </div>
                </div>

                <textarea id="image-text"></textarea>
                <progress id="progressbar" min="0" max="1" value="0" />
               
            </div>
        </form>







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
<script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var input_image = document.getElementById('input_image');
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


<html>