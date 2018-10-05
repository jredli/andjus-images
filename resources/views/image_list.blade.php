
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hydrogen &mdash; A free HTML5 Template by FREEHTML5.CO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link href="{!! asset('css/animate.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Icomoon Icon Fonts-->
    <link href="{!! asset('css/icomoon.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Magnific Popup -->
    <link href="{!! asset('css/magnific-popup.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Salvattore -->
    <link href="{!! asset('css/salvattore.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Theme Style -->
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script type="text/javascript" src="{!! asset('js/modernizr-2.6.2.min.js') !!}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{!! asset('js/respond.min.j') !!}"></script>
    <![endif]-->

</head>
<body>

<div id="fh5co-offcanvass">
    <a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
    <h1 class="fh5co-logo"><a class="navbar-brand" href="{{ route('home') }}"><img  width="80" src="{{asset('images/logo.png')}}"></a></h1>
    <ul>
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        @if(Auth::guest())
            <li><a href="{{ route('login') }}">Sign in</a></li>
        @endif

        @auth
            <li class="active"><a href="{{ route('image_create') }}">Upload Images</a></li>
            <li class="active"><a href="{{ route('image_list') }}">Images list</a></li>
            <li class="active"><a href="{{ route('logout') }}">Logout</a></li>
        @endauth
    </ul>
    <h3 class="fh5co-lead">Connect with me</h3>
    <p class="fh5co-social-icons">
        <a href="#"><i class="icon-facebook"></i></a>
        <a href="#"><i class="icon-instagram"></i></a>
        <a href="#"><i class="icon-camera"></i></a>
    </p>
</div>
<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
                <a class="navbar-brand" href="{{ route('home') }}"><img class="img-size" src="{{asset('/images/logo.png')}}"></a>
            </div>
        </div>
    </div>
</header>
<!-- END .header -->
<div id="fh5co-main">
    <div class="container-fluid">

        <div class="row">

            <div id="fh5co-board" data-columns>

            @foreach($images as $image)
                <!-- Image block -->
                    <div class="item">
                        <div class="animate-box">
                            <a href="{{$image->path}}" class="image-popup fh5co-board-img" title="{{ $image->description }}"><img src="{{$image->path}}" alt="{{ $image->description }}"></a>
                        </div>
                    </div>
                    <!-- Image block -->
                @endforeach


            </div>
        </div>
    </div>
</div>

<footer id="fh5co-footer">

    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="fh5co-social-icons">
                    <a href="#"><i class="icon-twitter"></i></a>
                    <a href="#"><i class="icon-facebook"></i></a>
                    <a href="#"><i class="icon-instagram"></i></a>
                    <a href="#"><i class="icon-dribbble"></i></a>
                    <a href="#"><i class="icon-youtube"></i></a>
                </p>
                <p><small>&copy; Hydrogen Free HTML5 Template. All Rights Reserved. <br>Designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | Images by: <a href="http://pexels.com" target="_blank">Pexels</a> </small></p>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ url('js/jquery.waypoints.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Salvattore -->
<script src="{{ url('js/salvattore.min.js') }}"></script>
<!-- Main JS -->
<script src="{{ url('js/main.js') }}"></script>





</body>
</html>
