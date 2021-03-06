<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ankit Shrestha Music</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Ankit Shrestha Music</a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>Events</a>
        </li>
        <li>
            <a href="#services" onclick=$("#menu-close").click();>Videos</a>
        </li>
        <li>
            <a href="#portfolio" onclick=$("#menu-close").click();>Lyrics</a>
        </li>
        <li>
            <a href="#" onclick=$("#menu-close").click();>Email Subscribe</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
        </li>

    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">



        <!--Try1-->
        <ul class="list-inline">
            <li>
                <a href="https://www.facebook.com/ankit2261"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
            </li>
            <li>
                <a href="https://itunes.apple.com/us/artist/ankit-shrestha/id1142449792"><i class="fa fa-apple fa-fw fa-3x"></i></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCJo-eGCM07tDKblljexZu_g"><i class="fa fa-youtube fa-fw fa-3x"></i></a>
            </li>
            <li>
                <a href="https://play.spotify.com/artist/3CKS9fPsTBBcQoneFUkPu5"><i class="fa fa-spotify fa-fw fa-3x"></i></a>
            </li>

            <li>
                <a href="https://soundcloud.com/ankit-shrestha-2"><i class="fa fa-soundcloud fa-fw fa-3x"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/ankitshresthamusic/"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-shopping-cart fa-fw fa-3x"></i></a>
            </li>
            <li>
                <a onclick="myFunction()"><i class="fa fa-envelope fa-fw fa-3x"></i></a>
            </li>

            <script>
                function myFunction() {
                    var person = prompt("Susbcribe to Ankit Shrestha's mailing list");

                    if (person != null) {
                        document.getElementById("demo").innerHTML =
                            "Email " + person + "has been subscribes";
                    }
                }
            </script>

        </ul>

        <img src="./img/ankit_final_2.jpg" class="img-responsive" alt="Ankit Shrestha">

        <p class="text-muted">Copyright &copy; Ankit Shrestha Music</p>
    </div>

</header>
<!--<footer>-->

<!--<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>-->
<!--</footer>-->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
        var that = $(this);
        // Disable the click handler until the user leaves the map area
        that.off('click', onMapClickHandler);
        // Enable scrolling zoom
        that.find('iframe').css("pointer-events", "auto");
        // Handle the mouse leave event
        that.on('mouseleave', onMapMouseleaveHandler);
    }
    // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
</script>

</body>

</html>

