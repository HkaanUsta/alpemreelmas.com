<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("/assets/css/main.css")}}">
    <style>
        @yield("css")
    </style>
    <title>@yield("title")</title>
</head>
<body>
<div class="container header">
    <header>
        <div class="container header-container">
            <h1>AEE</h1>
            <div class="header-menu">
                <ul>
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="./blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="./portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="./blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="./portfolio.html">Portfolio</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
            <i class="bi bi-list" id="hamburger_open"></i>
            <i class="bi bi-x" id="navbar_close"></i>
        </div>
    </header>
</div>
@yield("content")
<div class="container">
    <footer class="box-content">
        Copyright © All Right Reserved
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="./assets/js/main.js" type="text/javascript"></script>
<script src="./assets/js/owl.animate.js"></script>
<script src="./assets/js/owl.autoheight.js"></script>
<script src="./assets/js/owl.autoplay.js"></script>
<script src="./assets/js/owl.autorefresh.js"></script>
<script src="./assets/js/owl.carousel.js"></script>
<script src="./assets/js/owl.hash.js"></script>
<script src="./assets/js/owl.lazyload.js"></script>
<script src="./assets/js/owl.navigation.js"></script>
<script src="./assets/js/owl.support.js"></script>
<script src="./assets/js/owl.support.modernizr.js"></script>
<script src="./assets/js/owl.video.js"></script>
@yield("js")
</body>
</html>
