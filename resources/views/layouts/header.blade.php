<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Nurul Falah Surabaya</title>

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> --}}
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('yes/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('yes/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('yes/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('yes/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('yes/css/bootstrap_customized.min.css')}}" rel="stylesheet">
    <link href="{{asset('yes/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('yes/revolution-slider/fonts/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('yes/revolution-slider/css/settings.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('yes/revolution-slider/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('yes/revolution-slider/css/navigation.css')}}">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('yes/css/home.css')}}" rel="stylesheet">
    <link href="{{asset('yes/css/blog.css')}}" rel="stylesheet">
    <link href="{{asset('yes/css/listing.css')}}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('yes/css/custom.css')}}" rel="stylesheet">
    @yield('head')
    <!-- REVOLUTION SLIDER CUSTOM CSS -->
    <style type="text/css">
        .tiny_bullet_slider .tp-bullet:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 25px;
            top: -12px;
            left: 0px;
            background: transparent
        }
        .bullet-bar.tp-bullets:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box
        }
        .bullet-bar .tp-bullet {
            width: 60px;
            height: 3px;
            position: absolute;
            background: #aaa;
            background: rgba(204, 204, 204, 0.5);
            cursor: pointer;
            box-sizing: content-box
        }
        .bullet-bar .tp-bullet:hover,
        .bullet-bar .tp-bullet.selected {
            background: rgba(204, 204, 204, 1)
        }
        .rev_slider, .li{
            max-width: 100% !important;
            /* height: auto !important; */
        }
        @media screen and (max-width: 420px) {
            .rev_slider_wrapper{
                width: 100% !important;
                height: 240px !important;
            }
        }
    </style>

</head>

<body>
                
    <header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                    <img src="{{asset('yes/img/nf_logo_white.png')}}" width="150" height="52" alt="" class="logo_normal">
                    <img src="{{asset('yes/img/nf_logo.png')}}" width="150" height="52" alt="" class="logo_sticky">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            {{-- <ul id="top_menu">
                <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
                <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
            </ul> --}}
            <!-- /top_menu -->
            <a class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
           <nav class="main-menu">
                <div id="header_menu">
                    <a  class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="index.html"><img src="{{asset('yes/img/nf_logo_white.png')}}" width="162" height="62" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="/">Home</a>
                    </li>
                    <li class="submenu">
                        <a href="#" class="show-submenu">Media</a>
                        <ul>
                            <li><a href="#">Berita</a></li>
                            <li><a href="#">Artikel</a></li>
                            <li><a href="#">Majalah</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="/">Cabang</a>
                    </li>
                    <li class="submenu">
                        <a href="/">Profile</a>
                    </li>
                    <li class="submenu">
                        <a href="/">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- /header -->