@extends('layouts.app')
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



</head>

<body>
    <div class="container" id="tools" style="background-color: beige;");" >

        <div id="projects" class="slider">
            <div class="sc-8c1f2v-0 dLeBHm">
                <header class="sc-184bfsn-0 efzTcK">
                    <h1 class="sc-184bfsn-1 efIpGT">All the tools that can make your job easier </h1>
                    <p class="sc-184bfsn-2 efQMlc">Simple App To Convert, Make it all easy!</p>
                </header>
                <div class="pvbp07-0 ceYKI">
                    <div class="sc-1k9qdlb-0 lcJXfA">
                        <ul class="sc-1sr2v2y-0 iUiZBt">
                            <li class="ak39fa-0 bhAFtM">
                                <div class="ojwc4z-0 jkSeLq"><a class="sc-1bu7qfl-0 lfMGmO ojwc4z-2 gZBElH" href="{{url('convert.imgtotxt')}}">
                                        <div tabindex="-1" class="ojwc4z-6 kPnmgt">Image To Text</div>
                                    </a>
                                    <div class="sc-1gyxcpm-0 csDfHB ojwc4z-4 dOHSmX" style="width:32px;height:32px"><svg viewBox="0 0 32 32" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                            <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V28C32 30.2091 30.2091 32 28 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F23030"></path>
                                            <path d="M7.68718 7.68718L15.8787 9.73507L16 9.76539L16.1213 9.73507L24.3128 7.68718L22.2649 15.8787L22.2346 16L22.2649 16.1213L24.3128 24.3128L16.1213 22.2649L16 22.2346L15.8787 22.2649L7.68718 24.3128L9.73507 16.1213L9.76539 16L9.73507 15.8787L7.68718 7.68718Z" stroke="white"></path>
                                        </svg></div>
                                    <div class="ojwc4z-1 jgylRt">
                                        <div class="sc-1gyxcpm-0 csDfHB" style="width:24px;height:24px"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M9 7L10 6L16 12L10 18L9 17L14.17 12L9 7Z"></path>
                                            </svg></div>
                                    </div>
                                    <p class="ojwc4z-5 jZEeUz">Reduce the size of your PDF without losing quality</p>
                                </div>
                            </li>
                            <li class="ak39fa-0 bhAFtM">
                                <div class="ojwc4z-0 jkSeLq"><a class="sc-1bu7qfl-0 lfMGmO ojwc4z-2 gZBElH" href="#">
                                        <div tabindex="-1" class="ojwc4z-6 kPnmgt">Image To PDF</div>
                                    </a>
                                    <div class="sc-1gyxcpm-0 csDfHB ojwc4z-4 dOHSmX" style="width:32px;height:32px"><svg viewBox="0 0 32 32" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                            <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V28C32 30.2091 30.2091 32 28 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#F23030"></path>
                                            <rect x="7.5" y="7.5" width="6" height="8" stroke="white"></rect>
                                            <rect x="18.5" y="16.5" width="6" height="8" stroke="white"></rect>
                                            <path d="M16 10L15.6464 9.64645L15.2929 10L15.6464 10.3536L16 10ZM22 10H22.5V9.5H22V10ZM18.3536 8.35355L18.7071 8L18 7.29289L17.6464 7.64645L18.3536 8.35355ZM17.6464 12.3536L18 12.7071L18.7071 12L18.3536 11.6464L17.6464 12.3536ZM16 10.5H22V9.5H16V10.5ZM21.5 10V15H22.5V10H21.5ZM16.3536 10.3536L18.3536 8.35355L17.6464 7.64645L15.6464 9.64645L16.3536 10.3536ZM15.6464 10.3536L17.6464 12.3536L18.3536 11.6464L16.3536 9.64645L15.6464 10.3536Z" fill="white"></path>
                                            <path d="M16 22L16.3536 22.3536L16.7071 22L16.3536 21.6464L16 22ZM9 22H8.5L8.5 22.5H9L9 22ZM13.6464 23.6464L13.2929 24L14 24.7071L14.3536 24.3536L13.6464 23.6464ZM14.3536 19.6464L14 19.2929L13.2929 20L13.6464 20.3536L14.3536 19.6464ZM16 21.5L9 21.5L9 22.5L16 22.5V21.5ZM9.5 22L9.5 17L8.5 17L8.5 22H9.5ZM15.6464 21.6464L13.6464 23.6464L14.3536 24.3536L16.3536 22.3536L15.6464 21.6464ZM16.3536 21.6464L14.3536 19.6464L13.6464 20.3536L15.6464 22.3536L16.3536 21.6464Z" fill="white"></path>
                                        </svg></div>
                                    <div class="ojwc4z-1 jgylRt">
                                        <div class="sc-1gyxcpm-0 csDfHB" style="width:24px;height:24px"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M9 7L10 6L16 12L10 18L9 17L14.17 12L9 7Z"></path>
                                            </svg></div>
                                    </div>
                                    <p class="ojwc4z-5 jZEeUz">Convert Word, PowerPoint and Excel files to and from PDF</p>
                                </div>
                            </li>
                            <li class="ak39fa-0 bhAFtM">
                                <div class="ojwc4z-0 jkSeLq"><a class="sc-1bu7qfl-0 lfMGmO ojwc4z-2 gZBElH" href="#">
                                        <div tabindex="-1" class="ojwc4z-6 kPnmgt">PDF to WORD</div>
                                    </a>
                                    <div class="sc-1gyxcpm-0 csDfHB ojwc4z-4 dOHSmX" style="width:32px;height:32px"><svg viewBox="0 0 32 32" fill="none" xmlns="../www.w3.org/2000/svg.html">
                                            <path d="M0 4C0 1.79086 1.79086 0 4 0H28C30.2091 0 32 1.79086 32 4V28C32 30.2091 30.2091 32 28 32H4C1.79086 32 0 30.2091 0 28V4Z" fill="#FF8000"></path>
                                            <rect x="7.5" y="7.5" width="10" height="13" stroke="white"></rect>
                                            <path d="M15 15C15 16.6569 13.6569 18 12 18C10.3431 18 9 16.6569 9 15C9 13.3431 10.3431 12 12 12V15H15Z" fill="white"></path>
                                            <path d="M13 11C14.6569 11 16 12.3431 16 14H13V11Z" fill="white"></path>
                                            <path d="M18 11.5H24.5V24.5H14.5V20" stroke="white"></path>
                                        </svg></div>
                                    <div class="ojwc4z-1 jgylRt">
                                        <div class="sc-1gyxcpm-0 csDfHB" style="width:24px;height:24px"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                <path d="M9 7L10 6L16 12L10 18L9 17L14.17 12L9 7Z"></path>
                                            </svg></div>
                                    </div>
                                    <p class="ojwc4z-5 jZEeUz">Convert PowerPoint presentations to PDF documents</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
<html>