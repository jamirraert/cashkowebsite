<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" sizes="32x32" href="/images/favicon.png" type="image/png">
    <title>Cashko Insurance</title>
    <!-- Boxicons CDN-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Bootstrap CSS -->
    
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <nav>
        <div class="container">
            <a href="/" class="nav_logo">
                <img src="{{ asset('images/CashKo-Primary-Logo.png') }}">
            </a>
            <ul id="nav_items">
                <li><a href="/privacy_policy">PRIVACY POLICY</a></li>
            </ul>
            <button id="open_nav_btn"><i class='bx bx-menu'></i></button>
            <button id="close_nav_btn"><i class='bx bx-x'></i></button>
        </div>
    </nav>
    @yield('content')
    <footer>
        <div class="container">
            <div id="f_left">
                <span><a href="/contact" style="color: #FE9202; cursor: pointer;">CONTACT US</a></span>
                <div>
                    <span>Globe: (0&zwnj;28) 87&zwnj;6 14&zwnj;28</span>
                    <span>PLDT: (0&zwnj;32) 34&zwnj;2 78&zwnj;26</span>
                    <span>Toll-Free: 18&zwnj;00 13&zwnj;20 02&zwnj;11</span>
                    <span><a href="#">support@ruralnet.ph</a></span>
                </div>
             </div>
             {{-- <div id="f_right">
                <div>
                    <i class='bx bxl-instagram'></i>
                    <i class='bx bxl-twitter' ></i>
                    <i class='bx bxl-facebook' ></i>
                </div>
                <span><a href="/">© Cashko</a></span>
            </div> --}}
        </div>
    </footer>   
</body>
</html>
