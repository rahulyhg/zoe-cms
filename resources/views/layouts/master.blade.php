<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimal Portfolio Theme">
    <meta name="keywords" content="responsive, retina ready, html5, css3, creative, portfolio, bootstrap theme" />
    <meta name="author" content="Mike Bywater">

    <!-- favicon -->
    <link rel="icon" href="images/favicon.png">
    <!-- page title -->
    <title>Zoe Bywater Make Up Artist</title>
    <!-- bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/linear-icons.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<!-- header -->
<header>
    <!-- nav -->
    <nav class="navbar navbar-default stacked-menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- / navbar-header -->
            <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="logo"></a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><span>HOME</span></a></li>
                    <li><a href="about.html"><span>ABOUT</span></a></li>
                    <li><a href="contact.html"><span>CONTACT</span></a></li>
                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
    </nav>
    <!-- / nav -->
</header>
<!-- / header -->


@yield('content')


<!-- footer -->
<footer class="dark">
    <div class="container">
        <p class="footer-info">© ZOE BYWATER
            <span class="social pull-right">
   <!--             <a href="#x"><i class="fa fa-facebook"></i></a>
                <a href="#x"><i class="fa fa-twitter"></i></a> -->
                <a href="https://www.instagram.com/zoebywatermua/"><i class="fa fa-instagram"></i></a>
            </span>
        </p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.min.js"></script>

<!-- portfolio -->
<script src="js/custom.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<!-- lightbox -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
    // This will create a single gallery from all elements that have class "lightbox"
    $('.lightbox').each(function() {
        $(this).magnificPopup({
            delegate: 'a.open-gallery', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled:true
            }
        });
    });
</script>
<!-- / lightbox -->
<!-- / portfolio -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>