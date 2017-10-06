<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="raphdelvillar@gmail.com">

    <title>Quality Manpower</title>
    <link rel="shortcut icon" href="#">
    <!-- Angular Material style sheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.4/angular-material.min.css">
    <!-- Angular Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Font Style -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!-- Jquery Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css"/>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Angular Material requires Angular.js Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.4/angular-material.min.js"></script>

    <!-- Angular Carousel 3D -->
    <script src="<?php echo get_template_directory_uri();?>/import/angular-swipe.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/import/angular-carousel-3d-master/dist/carousel-3d.js"></script>

    <!-- Angular Sanitize -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js"></script>

    <!-- jquery marquee-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js"></script>

    <!-- jquery tinycarousel -->
    <script src="<?php echo get_template_directory_uri();?>/import/tinycarousel/lib/jquery.tinycarousel.js"></script>

    <!-- jquery fancybox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

    <!-- jquery slick -->
    <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/86b7056105.js"></script>

<?php wp_head(); ?>
</head>
<body ng-App="qmanpowerApp">

<md-content id="container" style="overflow: hidden" layout-xs="column" layout-xs-fill layout-sm="column" layout-md="row" layout="row" >
