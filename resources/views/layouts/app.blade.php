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
</head>
<body>
<div class="wrapper">
    <img src="/fig/KU_photo.jpg" Style=" width:220px; height:120px; border-right: 1px solid#f8fafc">
    <img src="/fig/EL.jpg" Style=" width:1000px; height:120px; border-right: 1px solid#f8fafc">
    <img src="/fig/Logo_KU.jpeg" Style=" width:100px; height:120px; ">
</div>
    <div class="wrapper">
        <div class="sidebar navbar">
            <ul>
                <li> <a href="/">Home </a></li>
                <li> <a href="/about">About </a></li>
                <li> <a>Committee <span><i class="fa fa-caret-right"></i></span></a>
                    <ul>
                        <li> <a href="/ICECIT">Organizing </a></li>
                        <li> <a href="/ICECIT">Technical</a></li>
                        <li> <a href="/ICECIT">Int. Advisory </a></li>
                    </ul>
                </li>
                <li><a>Author <span><i class="fa fa-caret-right"></i></span></a>
                    <ul>
                        <li> <a href="/ICECIT">Call For Paper </a></li>
                        <li> <a href="/ICECIT">Important Dates</a></li>
                    </ul>
                </li>
                <li> <a>Program </a>
                    <ul>
                        <li><a href="/ICECIT">KEYNOTES </a></li>
                        <li><a href="/ICECIT">EXECUTIVE FORUM</a></li>
                        <li><a href="/ICECIT">TECHNICAL PROGRAM </a></li>
                        <li><a href="/ICECIT">INDUSTRY PROGRAM </a></li>
                        <li><a href="/ICECIT">SPECIAL EVENTS </a></li>
                        <li><a href="/ICECIT">NETWORK WITH THE LEADERS </a></li>
                        <li><a href="/ICECIT">BOARD AND COMMITTEE MEETINGS </a></li>
                        <li><a href="/ICECIT">STUDENT TRAVEL GRANT WINNERS</a></li>
                        <li><a href="/ICECIT">YOUNG PROFESSIONALS PROGRAMS</a></li>
                    </ul></li>
                <li> <a>Registration </a>
                    <ul>
                        <li> <a>REGISTRATION FEES </a></li>
                        <li> <a>POLICIES</a></li>
                        <li> <a>TRANSFER/SUBSTITUTION POLICY </a></li>
                        <li> <a>EVENT CONDUCT</a></li>
                        <li> <a>STUDENT TRAVEL GRANTS</a></li>
                    </ul></li>
                <li><a>Hotel/Travel </a>
                    <ul>
                        <li><a href="/ICECIT">Venue </a></li>
                        <li><a href="/ICECIT">Travel Information</a></li>
                        <li><a href="/ICECIT">Local Attractions </a></li>
                    </ul></li>
                <li><a>Visa Information </a>
                    <ul>
                        <li><a href="/ICECIT">Local Attractions </a></li>
                    </ul></li>
                <li> <a>Sensors/Exhibition </a>
                    <ul>
                        <li><a href="/ICECIT">GENERAL CONFERENCE SPONSORSHIPS </a></li>
                        <li><a href="/ICECIT">GENERAL CONFERENCE SPONSORSHIPS</a></li>
                        <li><a href="/ICECIT">EXHIBITION ONLY</a></li>
                        <li><a href="/ICECIT">INNOVATION CENTER </a></li>
                        <li><a href="/ICECIT">DOWNLOAD THE SPONSORSHIP BROCHURE </a></li>
                        <li><a href="/ICECIT">DOWNLOAD SPONSORSHIP AND EXHIBITION INTEREST FORM </a></li>
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
