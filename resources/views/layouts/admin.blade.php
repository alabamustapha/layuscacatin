<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Layus Investment Company') }}</title>

    <!-- <meta property="og:url"           content="http://www.your-domain.com/your-page.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" /> -->

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <link href="{{ asset('css/style.pink.css') }}" rel="stylesheet" id="theme-stylesheet">


    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    
    <!-- owl carousel css -->

    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Welcome Admin</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">

                            <li><a href="{{ url('/') }}">Home</a>
                            </li>
                            <li></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <div class="row">

                <!-- *** LEFT COLUMN *** -->
             
                <div class="col-md-2">  

                    @include('layouts.partials.admin_nav')

                </div>

                <!-- *** END LEFT COLUMN *** -->    

                <div class="col-md-10">

                        @yield('content')
                    
                </div>

                    
                </div>    

            </div>
        </div>  

   <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; {{ date("Y") }}. Layus Investment Company Limited</p>
                    <p class="pull-right">Site by <a href="https://redehub.com.ng">Rede Hub</a>
                         
                    </p>

                </div>
            </div>
    </div>
    

    <!-- Scripts -->


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset("js/jquery-1.11.0.min.js") }}"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>

    

    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    
</body>
</html>
