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
    <link href="css/convert.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

    <script src="../../code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../../unpkg.com/popper.js%401.16.1/dist/umd/popper.min.js"></script>

    <script src="../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>


</head>

<body>
    <div class="sc-1ttxsn1-0 fxCLCz" style="padding-left: 100px;">
        <div class="sc-1ttxsn1-1 hvHwmD">
            <div class="sc-17y9jfw-1 lpeKGy">
                <div class="sc-17y9jfw-5 qNym">
                    <div class="sc-1gyxcpm-0 csDfHB sc-17y9jfw-4 iqUd" style="width:32px;height:32px"><svg viewBox="0 0 32 32" fill="none" xmlns="../www.w3.org/2000/svg.html">
                            <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V28C32 30.2091 30.2091 32 28 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F23030"></path>
                            <path d="M7.68718 7.68718L15.8787 9.73507L16 9.76539L16.1213 9.73507L24.3128 7.68718L22.2649 15.8787L22.2346 16L22.2649 16.1213L24.3128 24.3128L16.1213 22.2649L16 22.2346L15.8787 22.2649L7.68718 24.3128L9.73507 16.1213L9.76539 16L9.73507 15.8787L7.68718 7.68718Z" stroke="white"></path>
                        </svg></div>
                    <h1 class="sc-17y9jfw-2 lpnhkH">Convert Image To Text</h1>
                </div>
                <h2 class="sc-17y9jfw-3 lpvDOQ">Convert Your Image To Text</h2>
            </div>
        </div>
    </div>


    <div class="sc-1ttxsn1-0 fxCLCz" style="padding-left:90px;">
        <div class="sc-1ttxsn1-1 hvHwmD">
            <div class="sc-1rkezdt-0 cweQTx">
                <div class="sc-1rkezdt-1 buUasx">
                    <div class="sc-1rkezdt-2 cwvKbP"></div>
                    <div class="sc-1rkezdt-3 cwEgFY">
                        <form class="sc-1oqtgb8-1 fqHzAf">
                            <label class="sc-1oqtgb8-2 fqPWeo">

                                <input type="file" id="input_image" multiple="" accept="application/pdf,.pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.docx,application/msword,.doc,application/vnd.openxmlformats-officedocument.presentationml.presentation,.pptx,application/vnd.ms-powerpoint,.ppt,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xlsx,application/vnd.ms-excel,.xls,image/bmp,.bmp,image/jpeg,.jpg,.jpeg,image/png,.png,image/tiff,.tif,.tiff" class="sc-1oqtgb8-0 fqzcVW" />
                                <div class="sc-1rkezdt-4 cwMDkh">
                                    <div class="sc-1rkezdt-5 cwUZOq">
                                        <div class="sc-2xfn8l-0 bxyVaO sc-6w1ep9-0 iTXuYA"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 60">
                                                <path d="M56.9358018,0.887952143 L87.1245072,1.94216497 L95.1229308,10.5194242 L93.649924,52.7008195 C93.6036653,54.0254955 92.5349073,55.07339 91.2286594,55.11247 L91.0641982,55.1120479 L68.9993032,54.34053 L69,58 C69,59.1045695 68.1045695,60 67,60 L31,60 C29.8954305,60 29,59.1045695 29,58 L28.9993032,54.26853 L4.93575717,55.1094924 C3.61108122,55.1557511 2.49118654,54.162694 2.36108243,52.862354 L2.35003136,52.6982641 L0.67485552,4.72750438 C0.628596816,3.40282843 1.62165394,2.28293375 2.92199388,2.15282964 L3.08608385,2.14177857 L33.2747893,1.08756574 L40.5172077,7.8412302 L40.3683032,7.99952995 L54.1853032,7.99952995 L54.350076,3.29918047 C54.3963347,1.97450452 55.4650927,0.926610013 56.7713406,0.887529955 L56.9358018,0.887952143 Z M59.9993032,8.99952995 L31,9 C30.4871642,9 30.0644928,9.38604019 30.0067277,9.88337887 L30,10 L29.9993032,38.99953 L50,39 C50.5522847,39 51,39.4477153 51,40 L51,51 C51,51.5522847 50.5522847,52 50,52 L29.9993032,51.99953 L30,58 C30,58.5128358 30.3860402,58.9355072 30.8833789,58.9932723 L31,59 L67,59 C67.5128358,59 67.9355072,58.6139598 67.9932723,58.1166211 L68,58 L67.9993032,16.99953 L60,17 L59.9993032,8.99952995 Z M56.9009023,1.88734297 C56.1216811,1.86013197 55.4605576,2.43229572 55.3613708,3.1899476 L55.3494668,3.33407997 L55.1863032,7.99952995 L61,8 L69,16 L68.9991926,25.6289267 C70.5660308,24.8310303 72.3185302,24.4353033 74.1222153,24.4982894 C79.9176726,24.7006712 84.4517561,29.5628805 84.2493743,35.3583378 C84.0469925,41.1537951 79.1847832,45.6878786 73.3893259,45.4854968 C71.8381588,45.4313288 70.3473363,45.0415105 68.9989737,44.3553556 L68.9993032,53.34053 L91.0990977,54.112657 C91.8783189,54.139868 92.5394424,53.5677043 92.6386292,52.8100524 L92.6505332,52.66592 L94.0793032,11.69053 L86.5859814,11.4291499 L85.5865905,11.3942504 L85.8833032,2.89752995 L56.9009023,1.88734297 Z M32.1023032,2.12752995 L3.12098334,3.1411694 C2.34176219,3.1683804 1.72216126,3.78526803 1.67606716,4.54799323 L1.67424635,4.69260488 L3.34942219,52.6633646 C3.37663319,53.4425857 3.99352083,54.0621867 4.75624602,54.1082808 L4.90085767,54.1101016 L28.9993032,53.26853 L28.9993032,51.99953 L28,52 C27.4477153,52 27,51.5522847 27,51 L26.9993032,44.83453 L19.5950841,45.0933432 L19.595119,45.0943425 L18.5957281,45.129242 L18.5956932,45.1282427 L13.5987391,45.3027401 L13.598774,45.3037395 L12.5993832,45.338639 L11.8664937,24.3514317 L28.9993032,23.75253 L29,10 C29,8.8954305 29.8954305,8 31,8 L32.3073032,7.99952995 L32.1023032,2.12752995 Z M59,50 L59,51 L53,51 L53,50 L59,50 Z M32.3146067,42 L30,42 L30,49 L31.3033708,49 L31.3033708,46.4311927 L32.3595506,46.4311927 C33.9438202,46.4311927 35.1573034,45.7140673 35.1573034,44.1620795 C35.1573034,42.5351682 33.9438202,42 32.3146067,42 Z M38.505618,42 L36.5393258,42 L36.5393258,49 L38.5730337,49 C40.752809,49 42.0786517,47.7905199 42.0786517,45.4678899 C42.0786517,43.1559633 40.752809,42 38.505618,42 Z M48,42 L43.5617978,42 L43.5617978,49 L44.8651685,49 L44.8651685,46.0779817 L47.5393258,46.0779817 L47.5393258,45.029052 L44.8651685,45.029052 L44.8651685,43.0489297 L48,43.0489297 L48,42 Z M38.4157303,43.0061162 C39.8988764,43.0061162 40.741573,43.7553517 40.741573,45.4678899 C40.741573,47.1222018 39.9649438,47.9281908 38.5906208,47.990023 L38.4157303,47.9938838 L37.8426966,47.9938838 L37.8426966,43.0061162 L38.4157303,43.0061162 Z M59,45 L59,46 L53,46 L53,45 L59,45 Z M32.2134831,42.9954128 C33.3033708,42.9954128 33.8764045,43.2844037 33.8764045,44.1620795 C33.8764045,44.9679799 33.4086155,45.3851518 32.4449351,45.4314423 L32.258427,45.4357798 L31.3033708,45.4357798 L31.3033708,42.9954128 L32.2134831,42.9954128 Z M69.0265641,26.7510919 L68.9993032,26.76653 L68.9996167,43.2178828 C70.3344397,43.991422 71.8438183,44.4309169 73.4242254,44.4861059 C78.3287144,44.6573745 82.4944919,41.0794986 83.1625055,36.3253363 L73.720804,35.9951266 L74.0873158,25.4976802 L74.0873158,25.4976802 C72.2889112,25.4348785 70.5488066,25.8752929 69.0265641,26.7510919 Z M18.4212307,40.1322879 L13.4242765,40.3067854 L13.5638396,44.3033493 L18.5607937,44.1288518 L18.4212307,40.1322879 Z M27.0141292,39.8315388 L19.4206215,40.0973884 L19.5601846,44.0939523 L26.9993032,43.83453 L27,40 C27,39.9425877 27.0048382,39.8863055 27.0141292,39.8315388 Z M59,40 L59,41 L53,41 L53,40 L59,40 Z M18.2467332,35.1353338 L13.249779,35.3098313 L13.389377,39.3073946 L18.3863312,39.1328971 L18.2467332,35.1353338 Z M28.9993032,34.75853 L19.246124,35.1004343 L19.385722,39.0979976 L28.9993032,38.76153 L28.9993032,34.75853 Z M59,35 L59,36 L39,36 L39,35 L59,35 Z M18.0722357,30.1383796 L13.0752816,30.3128771 L13.2148795,34.3104404 L18.2118337,34.1359429 L18.0722357,30.1383796 Z M28.9993032,29.75553 L19.0716265,30.1034801 L19.2112245,34.1010435 L28.9993032,33.75853 L28.9993032,29.75553 Z M59,30 L59,31 L39,31 L39,30 L59,30 Z M17.8977382,25.1414255 L12.9007841,25.315923 L13.0403821,29.3134863 L18.0373362,29.1389888 L17.8977382,25.1414255 Z M28.9993032,24.75353 L18.897129,25.106526 L19.036727,29.1040893 L28.9993032,28.75553 L28.9993032,24.75353 Z M60.9993032,9.41452995 L60.9993032,15.99953 L67.5843032,15.99953 L60.9993032,9.41452995 Z M86.8743032,3.14052995 L86.6203032,10.42953 L93.9093032,10.68353 L86.8743032,3.14052995 Z M33.1093032,2.29952995 L33.3083032,7.99952995 L39.2203032,7.99952995 L33.1093032,2.29952995 Z">
                                                </path>
                                            </svg></div>
                                    </div>
                                    <div class="sc-1rd62mt-0 ejABoE">
                                        <div class="l3tlg0-6 dKjQAB">
                                            <button type="button" class="l3tlg0-0 hrcxSS">
                                                <div class="sc-1rd62mt-1 hlFFCf">
                                                    <div class="sc-1gyxcpm-0 csDfHB" style="width:24px;height:24px">
                                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                            <path d="M14.0036 1.99646L17.0036 4.99646L16.999 4.99946L17 5.00001V13H16V5.99946L13 6.00001V2.99946H4V17.9995L12.0275 18.0003C12.0093 17.8361 12 17.6691 12 17.5C12 15.0147 14.0147 13 16.5 13C18.9853 13 21 15.0147 21 17.5C21 19.9853 18.9853 22 16.5 22C14.5409 22 12.8742 20.7481 12.2563 19.0007L3 19V2.00001H14L14.0036 1.99646ZM16.5 14C14.567 14 13 15.567 13 17.5C13 19.433 14.567 21 16.5 21C18.433 21 20 19.433 20 17.5C20 15.567 18.433 14 16.5 14ZM17 15V16.9995L19 17V18L17 17.9995V20H16V17.9995L14 18V17L16 16.9995V15H17ZM11 14V15H6V14H11ZM14 11V12H6V11H14ZM14 8.00001V9.00001H6V8.00001H14ZM14 3.40746V4.99946H15.592L14 3.40746Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span class="sc-1rd62mt-2 ejRuwW">Choose Files</span>
                                            </button>
                                            <button type="button" title="Expand menu" class="l3tlg0-2 enfNez">
                                                <div class="sc-1gyxcpm-0 csDfHB" style="width:16px;height:16px">
                                                    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                        <path d="M13.3333 4L14.6666 5.33333L7.99992 12L1.33325 5.33333L2.66659 4L7.99992 9.5L13.3333 4Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="sc-1rkezdt-6 cxdwsz">or drop files here</div>
                                </div>
                            </label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <h1 class="sc-17y9jfw-2 lpnhkH">Result</h1>
        <h2 class="sc-17y9jfw-3 lpvDOQ">Don't hesitate to use our website again</h2>
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