<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_file/assets/css/style.css') }}">

</head>

<body class="alart aleart-sucsess">
    <div class="logo"><img src="{{ asset('frontend_file/assets/img/logo.png') }}" alt="logo site"></div>
    <ul class="menu">
        <li class="menu-item"><a href="{{route('cv')}}">
            <span class="link-icon">

            </span>
            <span class="link-text">
                رزومه موسس
            </span>
        </a></li>
        <li class="menu-item"><a href="{{route('about')}}">
            <span class="link-icon">

            </span>
            <span class="link-text">
                درباره ما
            </span>
           </a></li>
        <li class="menu-item"><a href="{{route('service')}}">  <span class="link-icon">

        </span>
        <span class="link-text">
            خدمات
        </span></a></li>
        <li class="menu-item">
            <a href="{{route('branches')}}">
            <span class="link-icon">

            </span>
            <span class="link-text">
                شعب
            </span>
        </a></li>
    </ul>

    <footer>
        <div>
            <a href="www.edutsn.com">www.edutsn.com</a>
        </div>

    </footer>
</body>

</html>
