<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'EasyGo') }}</title> -->
    <title>EasyGO</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* html {
            width: 100vw;
            height: 100vh;
        } */
        body {
            height: 100vh;
            background-image: url("{{asset('food_images/pattern.webp')}}"),
            linear-gradient(to right, rgb(243, 204, 62), white);
        }

        #app {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100vh;
            /* border: 2px solid black; */
        }

        main {
            margin: 0;
            padding: 0;
            width: 100%;
            /* background-color: #414A59; */
            /* background-image: url("{{asset('food_images/pattern.webp')}}"), */
            /* linear-gradient(to right, rgb(243, 204, 62), white); */

            height: calc(100vh - var(--nav-height));
        }

        .bg-yelish {

            background-color: rgb(243, 204, 62);
        }

        .stickit {
            position: sticky;
            top: 0;
            z-index: 1
        }

        .customLcolor {
            /* background-color: #F3CC3E; */
            background-color: rgb(249, 196, 4);
        }

        #myNav {
            box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.75);
            /* -webkit-box-shadow: 0px 15px 5px 0px rgba(0, 0, 0, 0.75); */
            /* -moz-box-shadow: 0px 15px 5px 0px rgba(0, 0, 0, 0.75); */
        }




        .btn {

            font-family: Roboto, sans-serif;
            font-weight: 0;
            font-size: 14px;
            color: #000000;
            background-color: #f2b72c;
            padding: 10px 30px;
            border: solid #f2b72c 2px;
            box-shadow: rgb(0, 0, 0) 0px 0px 0px 0px;
            border-radius: 50px;
            transition: 1000ms;
            transform: translateY(0);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {

            transition: 1000ms;
            padding: 10px 50px;
            transform: translateY(-0px);
            background-color: #000000;
            color: #f2b72c;
            border: solid 2px #000000;
        }

        .dropdwon-menu {
            background-color: red;
        }

        /* Utility classes */
        .showA img {
            display: block;
        }

        .headerA {
            width: 70%;
            /* margin: auto; */
            text-align: center;
        }

        .headerA h3 {
            white-space: nowrap;
            text-shadow: 2px 2px 5px #000000;
            font-weight: bolder;
            font-size: 2.5rem;
        }

        .containerA {
            display: flex;

            flex-direction: column;
            height: 100%;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            align-items: center;

        }

        .showA img {
            display: block;
        }

        .headerA {
            width: 70%;
            /* margin: auto; */
            text-align: center;
        }

        .heading {
            white-space: nowrap;
            text-shadow: 2px 2px 5px #000000;
            color: #fff;
            font-weight: bolder;
            font-size: 2.5rem;

        }

        .gold {
            background-color: gold;
        }

        .flex-start {
            align-items: flex-start;
        }

        .headerA h3 {
            white-space: nowrap;
            text-shadow: 2px 2px 5px #000000;
            font-weight: bolder;
            font-size: 2.5rem;
        }

        .containerA {
            display: flex;

            flex-direction: column;
            height: 100%;
            flex-wrap: wrap;
            justify-content: center;
            align-content: center;
            align-items: center;

        }

        .showA {
            display: flex;
            flex-wrap: wrap;
            height: 70%;
            gap: 1.1rem;
            justify-content: center;
            align-items: center;
            /* border: 2px solid #331; */
        }

        .width-half {
            width: 50%;

        }

        .width-one-third {
            width: 28%;

        }

        .featureA {
            height: 80%;
            /* border: 2px solid blue; */
            border-radius: 10px;
            background-color: #f3cc3e;
            box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.2);
            transition: all 0.5s ease-in-out;
            /* flex-basis: 220px; */
        }

        .featureA:hover {
            box-shadow: 2px 2px 5px rgb(0, 0, 0, 0.5);
        }
        .flex{
            display: flex;
        }

        .jcenter{
            justify-content: center;
        }
        .tcenter{
            text-align: center;
        }
        .imageA {
            /* border: 2px dotted red; */

            width: 100%;
            height: 60%;
        }

        .imageA img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            width: 100%;
            height: 100%;
        }

        .contentA {
            padding: 0.5rem;
        }


        .contentA h4 {
            text-align: center;
            margin-top: 0.5rem;
            font-weight: bold;
        }

        /* END */

        /* Table */
        .table-color{
            background-color: #34495E;
            color: #fff;
        }
        .rwd-table {
            margin: 1em 0;
            min-width: 300px;
        }

        .rwd-table tr {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        .rwd-table th {
            display: none;
        }

        .rwd-table td {
            display: block;
        }

        .rwd-table td:first-child {
            padding-top: 0.5em;
        }

        .rwd-table td:last-child {
            padding-bottom: 0.5em;
        }

        .rwd-table td:before {
            content: attr(data-th) ": ";
            font-weight: bold;
            width: 6.5em;
            display: inline-block;
        }

        @media (min-width: 480px) {
            .rwd-table td:before {
                display: none;
            }
        }

        .rwd-table th,
        .rwd-table td {
            text-align: center;
        }

        @media (min-width: 480px) {

            .rwd-table th,
            .rwd-table td {
                display: table-cell;
                padding: 0.25em 0.5em;
            }

            .rwd-table th:first-child,
            .rwd-table td:first-child {
                padding-left: 0;
            }

            .rwd-table th:last-child,
            .rwd-table td:last-child {
                padding-right: 0;
            }
        }

       

        h1 {
            font-weight: normal;
            letter-spacing: -1px;
            color: #34495e;
        }

        .rwd-table {
            background: #34495e;
            color: #fff;
            border-radius: 0.4em;
            overflow: hidden;
        }

        .rwd-table tr {
            border-color: #46637f;
        }

        .rwd-table th,
        .rwd-table td {
            margin: 0.5em 1em;
        }

        @media (min-width: 480px) {

            .rwd-table th,
            .rwd-table td {
                padding: 1em !important;
            }
        }

        .rwd-table th,
        .rwd-table td:before {
            color: #dd5;
        }

        /* table end */

    /* size and background */
    .seventyvw{
        width: 70%;

    }
    .border-black{
        border: 2px solid black;
    }
    /* END */

    /* Footer */
    .footer{
        position:fixed;
        bottom:0;
        width:100%;
        z-index: 1;
        height: 40px;
        padding-top: 0.65rem;
        box-shadow: 0 0 23px 0 rgba(0, 0, 0, 0.3);
    }
    /* END */

    </style>


</head>

<body>
    <div id="app">
        <nav id="myNav" class="navbar navbar-expand-md navbar-light customLcolor stickit">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'EasyGo') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                @if (Auth::user()->role == "Brand")
                                <a class="dropdown-item" href="{{ route('brand') }}">
                                    {{ __('Ticketing') }}
                                </a>
                                @endif



                                @if (Auth::user()->role == "Brand")
                                <a class="dropdown-item" href="{{ route('add_food_to_menu') }}">
                                    {{ __('Add Food to Menu') }}
                                </a>
                                @endif


                                @if (Auth::user()->role == "Customer")
                                <a class="dropdown-item" href="{{ route('buy_ticket') }}">
                                    {{ __('Buy Ticket') }}
                                </a>
                                @endif


                                @if (Auth::user()->role == "Customer")
                                <a class="dropdown-item" href="{{ route('ranking') }}">
                                    {{ __('Rating and Review') }}
                                </a>
                                @endif
                                <!-- <a class="dropdown-item" href="{{ route('brand') }}">
                                        {{ __('Ticketing') }}
                                    </a> -->
                                <!-- @if (Auth::user()->role == "Customer")
                                    <a class="dropdown-item" href="{{ route('shopping-items.index') }}">
                                        {{ __('Food') }}
                                    </a> -->
                                <!-- @endif -->
                                @if (Auth::user()->role == "Customer")
                                <a class="dropdown-item" href="{{ route('shopping-items.cart') }}">
                                    {{ __('Cart') }}
                                </a>
                                @endif


                                @if (Auth::user()->role == "Admin")
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Register Bus') }}
                                </a>
                                @endif


                                @if (Auth::user()->role == "Customer")
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>
                                @endif


                                @if (Auth::user()->role == "Brand")
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>
                                @endif



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

        <main>
            @yield('content')
        </main>
        <footer class="footer bg-yelish tcenter">
            © 2023 Brac University. All Rights Reserved. | Designed by Group 5.
        </footer>
    </div>
    <script>
        function updateNavHeightVariable() {
            const nav = document.getElementById("myNav");
            const navHeight = nav.offsetHeight;
            console.log(navHeight);
            document.documentElement.style.setProperty("--nav-height", navHeight + "px");
        }

        document.addEventListener("DOMContentLoaded", function() {
            console.log("DOM fully loaded and parsed");
            updateNavHeightVariable();
        });

        window.addEventListener("resize", function() {
            console.log("Resized");
            updateNavHeightVariable();
        });
    </script>
</body>

</html>