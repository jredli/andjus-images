
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Andjusimages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Andjus images" />
    <meta name="keywords" content="Andjus, images, istock" />

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
    <link rel="shortcut icon" href="{{ URL::asset('images/logo.png') }}">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

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
        <li><a href="{{ route('email.form') }}">Contact</a></li>
    </ul>
    <h3 class="fh5co-lead">Connect with me</h3>
    <p class="fh5co-social-icons">
        <a href="https://www.facebook.com/andjusimages/"><i class="icon-facebook"></i></a>
        <a href="https://www.instagram.com/dandjus/?fbclid=IwAR1Vm3dl2HbFJJnHoQhTa_ve3XovrcXPriwF-Frcrha9uW7UOLwHbs--xDw"><i class="icon-instagram"></i></a>
        <a href="http://www.istockphoto.com/portfolio/daniloandjus?excludenudity=true&sort=best#f7634b5
"><i class="icon-camera"></i></a>
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
            <div class="col-lg-4 col-lg-offset-4">
                <form action="{{ route('email.send') }}" method="post">
                    {{--<div class="form-group">--}}
                    {{--<label>Name</label>--}}
                    {{--<input type="text" name="name" class="form-control">--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="msg" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{ csrf_field() }}
                </form>
            </div>


        </div>
    </div>
</div>

<footer id="fh5co-footer">

    <div class="container">
        <div class="row row-padded">
            <div class="col-md-12 text-center">
                <p class="fh5co-social-icons">
                    <a href="http://www.istockphoto.com/portfolio/daniloandjus?excludenudity=true&sort=best#f7634b5
"><i class="icon-camera"></i></a>
                    <a href="https://www.facebook.com/andjusimages/"><i class="icon-facebook"></i></a>
                    <a href="https://www.instagram.com/dandjus/?fbclid=IwAR1Vm3dl2HbFJJnHoQhTa_ve3XovrcXPriwF-Frcrha9uW7UOLwHbs--xDw"><i class="icon-instagram"></i></a>
                </p>
           </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    Dropzone.options.dropzone =
        {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
                return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ route('image_destroy') }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function(file, response)
            {
                console.log(response);
            },
            error: function(file, response)
            {
                return false;
            }
        };
</script>

<!-- jQuery -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ url('js/jquery.easing.1.3.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ url('js/upload_images.js') }}"></script>
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
