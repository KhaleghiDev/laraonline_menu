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

<body class="alart aleart-sucsess">
    @include('layouts_master.chackscrine')
    <div class="logo"><img src="{{ asset('frontend_file/assets/img/logo.png') }}" alt="logo site"></div>
    <ul class="menu">
        <li class="menu-item"><a href="{{route('cv')}}">
            <span class="link-icon" active>
                <i class="fas fa-file" active></i>
            </span>
            <span class="link-text">
                رزومه موسس
            </span>
        </a></li>
        <li class="menu-item"><a href="{{route('about')}}">
            <span class="link-icon">
                <i class="fa-solid fa-users"></i>
            </span>
            <span class="link-text">
                درباره ما
            </span>
           </a></li>
        <li class="menu-item"><a href="{{route('service')}}">  <span class="link-icon">
            <i class="fa-solid fa-bell-concierge"></i>
        </span>
        <span class="link-text">
            خدمات
        </span></a></li>
        <li class="menu-item">
            <a href="{{route('branches')}}">
            <span class="link-icon">
                <i class="fas fa-building"></i>
            </span>
            <span class="link-text">
                شعب
            </span>
        </a></li>
    </ul>
<div class="circle"></div>
<div class="circle2"></div>
    <footer class="d-grid">
        <div>
            <a href="www.edutsn.com">www.edutsn.com</a>
        </div>
        <div>
            <ul class="menu-footer">
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>
