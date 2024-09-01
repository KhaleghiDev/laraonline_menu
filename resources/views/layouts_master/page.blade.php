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
    <title>منوی آنلاین </title>

    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/bootstrap/bootstrap.rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/plugin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/style.css') }}">

</head>

<body class="body">
    @include('layouts_master.chackscrine')
    <div class="app">
        <div class="header-page">
            <div class="back">

                <a href="{{ URL::previous() }}"><i class="fa-solid fa-chevron-right"></i></a>
                <a class="px-3" href="{{ route('home') }}"><i class="fa-solid fa-chevron-right"></i><i
                        class="fa-solid fa-home"></i></a>
            </div>
            <span>{{ $title }}</span>
            <a class="px-5" href="{{ route('home') }}">
                <div class="logo-page">
                    <img src="{{ asset('frontend_file/assets/img/logo.png') }}" alt="logo site">
                </div>
            </a>
        </div>
        <main>
            @if ($component === 'about')
                <x-about />
            @elseif ($component === 'service')
                <x-contact />
            @elseif ($component === 'cv')
                <x-cv />
            @elseif ($component === 'branches')
                <x-branches />
            @elseif ($component === 'branchesInput')
                <x-branchesInput />
            @elseif ($component === 'branchesOutput')
                <x-branchesOutput />
            @else
            @endif





        </main>
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
</body>
</div>
<script src="{{ asset('frontend_file/assets/js/swiper-element-bundle.min.js') }}"></script>
</html>
