<?php
global $con;
include 'database.php';
$sql = "SELECT * FROM `about` WHERE id = 1;";
$run = mysqli_query($con, $sql);
$get = mysqli_fetch_assoc($run);
$name = $get['name'];
$fullname = $name . $get['surname'];
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $name ?>'s Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co"/>
    <meta name="keywords"
          content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
    <meta name="author" content="freehtml5.co"/>

    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/respond.min.js"></script>

</head>
<body>
<header id="mu-header" class="" role="banner">
    <div class="container">
        <nav class="navbar navbar-default mu-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="#"><?= $name ?></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav mu-menu navbar-right">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#fh5co-about">ABOUT</a></li>
                        <li><a href="#fh5co-resume">RESUME</a></li>
                        <li><a href="#fh5co-skills">SKILLS</a></li>
                        <li><a href="#fh5co-gallery">GALLERY</a></li>
                        <li><a href="#fh5co-consult">CONTACT</a></li>
                    </ul>
                </div>
        </nav>
    </div>
</header>
<div class="fh5co-loader"></div>

<div id="page">
    <?php include 'header.php' ?>

    <?php include 'about.php' ?>

    <?php include 'resume.php' ?>

    <div id="fh5co-features" class="animate-box">
        <div class="container">
            <div class="services-padding">
            </div>
        </div>
    </div>

    <?php include 'skills.php' ?>

    <?php include 'gallery.php' ?>

    <?php include 'contact.php' ?>

    <div id="fh5co-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><span style="font-size: 2rem;">&copy</span><span><?php date_default_timezone_set('Africa/Lagos');
                            echo date("Y"); ?></span> Copyright. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>-->
    <script src="js/google_map.js"></script>

    <script src="js/main.js"></script>

</body>
</html>

