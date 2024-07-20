<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3"/>

    <!-- theme meta -->
    <meta name="theme-name" content="reader"/>

    <!-- plugins -->
    <link rel="stylesheet" href="theme/clients/reader/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="theme/clients/reader/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="theme/clients/reader/plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="theme/clients/reader/css/style.css" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="theme/clients/reader/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="theme/clients/reader/images/favicon.png" type="image/x-icon">

    <meta property="og:title" content="Reader | Hugo Personal Blog Template"/>
    <meta property="og:description" content="This is meta description"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="img-fluid" width="100px" src="theme/clients/reader/images/logo.png"
                     alt="Reader | Hugo Personal Blog Template">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mx-auto d-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Trang chủ
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            Danh mục
                        </a>
                        <div class="dropdown-menu">


                                <a class="dropdown-item" href="about-me.html">thành phoos</a>






                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Bài viết</a>
                    </li>
                    <li>
                        <div class="order-5 order-lg-3">


                            <!-- search -->
                            <form class="search-bar">
                                <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                            </form>

                            <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                                    data-target="#navigation">
                                <i class="ti-menu"></i>
                            </button>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <button id="navbarDropdown" class="nav-link dropdown-toggle"  role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="theme/clients/reader/images/logo.png"
                                 alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">  {{ Auth::user()->name }}</span>

                            </span>
                        </span>
                            </button>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


@yield('content')

@include('layouts.footer')
