<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title> ZIPLINK-لینک کوتاه  </title>

    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/bootstrap/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/plugin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/style.css') }}">
</head>

<body class="alart aleart-sucsess">
    @include('layouts_master.chackscrine')
    <div class="container app">
        <div class="logo"><img src="{{ asset('frontend_file/assets/img/logo.png') }}" alt="logo site"></div>
        <div class="row">

        <ul class="menu">
            <li class="menu-item"><a href="{{ route('cv') }}">
                    <span class="link-icon">
                        <i class="fa-solid fa-address-card"></i>
                    </span>
                    <span class="link-text">
                    {{ __('messages.title') }}
                        رزومه موسس
                    </span>
                </a></li>
            <li class="menu-item"><a href="{{ route('about') }}">
                    <span class="link-icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <span class="link-text">
                        درباره ما
                    </span>
                </a></li>
            <li class="menu-item"><a href="{{ route('service') }}"> <span class="link-icon">
                <i class="fa-brands fa-teamspeak"></i>
                    </span>
                    <span class="link-text">
                        خدمات
                    </span></a></li>
            <li class="menu-item">
                <a href="{{ route('branches') }}">
                    <span class="link-icon">
                        <i class="fa-solid fa-map-location-dot"></i>
                    </span>
                    <span class="link-text">
                        شعب
                    </span>
                </a>
            </li>
        </ul>
        <div class="circle1"></div>
        <div class="circle2"></div>
        <footer >
            <div class="footer-hero">
                <a href="www.edutsn.com">www.edutsn.com</a>
            </div>
            <div>
                <ul class="menu-footer">
                    <li><a href="https://www.instagram.com/edu.tsn/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/989002488881"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://www.facebook.com/edutsn.persian1/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.youtube.com/@EDUTSN"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://x.com/tolosafirannoor"><i class="fa-solid fa-x"></i></a></li>
                    <li><a href="https://www.tiktok.com/@edutsn"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>
        </footer>

    </div>


</body>

</html>
