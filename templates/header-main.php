<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>SADC Government</title>

    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="assets/js/respond.js"></script><![endif]-->
</head>

<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        <header class="main-header alternate">

            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo">
                        <a href="index.php">
                            <img src="assets/images/sadc-logo.svg" alt="" title="">
                        </a>
                    </div>

                </div>

                <!--Nav Box-->
                <div class="nav-outer">
                    <nav class="nav main-menu">
                        <ul class="navigation" id="navbar">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="listings.php">Listings</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="press.php">Press</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="mm-add-listing">
                                <a href="add-listing.php"
                                    class="theme-btn btn-style-three">
                                    <span class="flaticon-plus-symbol"></span>Add Listing</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="outer-box">
                        <!-- Add Listing -->
                        <a href="add-listing.php" class="add-listing"> <span class="flaticon-plus-symbol"></span> Add
                            Listing</a>


                        <!-- Login/Register -->
                        <div class="login-box">
                            <span class="flaticon-user"></span>
                            <a href="login.php" class="call-modal">Login</a> or
                            <a href="register.php" class="call-modal">Register </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="logo"><a href="index-2.html"><img src="assets/images/sadc-logo.svg" alt="" title=""></a>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">

                    <div class="outer-box">
                        <!-- Search Btn -->
                        <div class="search-box">
                            <button class="search-btn mobile-search-btn"><i
                                    class="flaticon-magnifying-glass"></i></button>
                        </div>

                        <!-- Cart btn -->
                        <div class="cart-btn">
                            <a href="shopping-cart.html"><i class="icon flaticon-shopping-bag"></i> <span
                                    class="count">2</span></a>
                        </div>

                        <!-- Login/Register -->
                        <div class="login-box">
                            <a href="login.html" class="call-modal"><span class="flaticon-user"></span></a>
                        </div>
                        <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span
                                class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>

            <!-- Mobile Nav -->
            <div id="nav-mobile"></div>

            <!-- Header Search -->
            <div class="search-popup">
                <span class="search-back-drop"></span>

                <div class="search-inner">
                    <button class="close-search"><span class="fa fa-times"></span></button>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Header Search -->

        </header>
        <!--End Main Header -->