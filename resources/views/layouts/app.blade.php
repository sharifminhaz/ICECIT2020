<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ICECIT 2020</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <img src="/fig/01.jpg" Style=" width:1300px; height:560px; border-right: 1px solid#f8fafc">
</div>
    <div class="wrapper">
        <div class="sidebar navbar">
            <ul>
                <li> <a href="#">Home </a></li>
                <li> <a href="#">About </a></li>
                <li> <a>Committee </a>
                <ul>
                    <li> <a>Organizing </a></li>
                    <li> <a>Technical</a></li>
                    <li> <a>Int. Advisory </a></li>
                </ul> </li>
                <li> <a>Author </a>
                    <ul>
                        <li> <a>Call For Paper </a></li>
                        <li> <a>Important Dates</a></li>
                    </ul></li>
                <li> <a>Program </a>
                    <ul>
                        <li> <a>KEYNOTES </a></li>
                        <li> <a>EXECUTIVE FORUM</a></li>
                        <li> <a>TECHNICAL PROGRAM </a></li>
                        <li> <a>INDUSTRY PROGRAM </a></li>
                        <li> <a>SPECIAL EVENTS </a></li>
                        <li> <a>NETWORK WITH THE LEADERS </a></li>
                        <li> <a>BOARD AND COMMITTEE MEETINGS </a></li>
                    </ul></li>
                <li> <a>Registration </a>
                    <ul>
                        <li> <a>REGISTRATION FEES </a></li>
                        <li> <a>POLICIES</a></li>
                        <li> <a>TRANSFER/SUBSTITUTION POLICY </a></li>
                        <li> <a>EVENT CONDUCT</a></li>
                        <li> <a>STUDENT TRAVEL GRANTS</a></li>
                    </ul></li>
                <li> <a>Hotel/Travel </a>
                    <ul>
                        <li> <a>Venue </a></li>
                        <li> <a>Travel Information</a></li>
                        <li> <a>Local Attractions </a></li>
                    </ul></li>
                <li> <a>Visa Information </a>
                    <ul>
                        <li> <a>Local Attractions </a></li>
                    </ul></li>
                <li> <a>Sensors/Exhibition </a>
                    <ul>
                        <li> <a>GENERAL CONFERENCE SPONSORSHIPS </a></li>
                        <li> <a>GENERAL CONFERENCE SPONSORSHIPS</a></li>
                        <li> <a>EXHIBITION ONLY</a></li>
                        <li> <a>INNOVATION CENTER </a></li>
                        <li> <a>DOWNLOAD THE SPONSORSHIP BROCHURE </a></li>
                        <li> <a>DOWNLOAD SPONSORSHIP AND EXHIBITION INTEREST FORM </a></li>
                    </ul></li>

            </ul>
        </div>
        <div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>



</body>
<footer class="foot">
    <h6 class="container">
        Copyright © 2020. All rights reserved Discipline of Electronics and Communication Engineering,
        Khulna University (KU), Khulna-9208, Bangladesh.Tel: (880 41) 769468-75 Fax: (880 41) 774403. 2020
    </h6>

</footer>
</html>
