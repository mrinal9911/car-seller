<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themecrest.top/templates/carmart/demo/car-details-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jun 2025 16:46:33 GMT -->

<head>

    <script src="js/color-modes.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">

    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.default.min.css">


    <!-- Magnific Popup stylesheet -->
    <link rel="stylesheet" href="libs/magnific-popup/dist/magnific-popup.css">



    <!-- Plyr stylesheet -->
    <link rel="stylesheet" href="libs/plyr/dist/plyr.css">

    <!-- Simplebar stylesheet -->
    <link rel="stylesheet" href="libs/simplebar/dist/simplebar.min.css">
    <noscript>
        <style>
            /**
        * Reinstate scrolling for non-JS clients
        */
            .simplebar-content-wrapper {
                scrollbar-width: auto;
                -ms-overflow-style: auto;
            }

            .simplebar-content-wrapper::-webkit-scrollbar,
            .simplebar-hide-scrollbar::-webkit-scrollbar {
                display: initial;
                width: initial;
                height: initial;
            }
        </style>
    </noscript>

    <!-- Jarallax stylesheet -->
    <link rel="stylesheet" href="libs/jarallax/dist/jarallax.min.css">

    <!-- Site stylesheet -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Color scheme -->
    <link id="templateColorScheme" rel="stylesheet" href="css/color-schemes/tc_red.css">

    <!-- Preloader stylesheet -->
    <link rel="stylesheet" href="css/preloader.css">

    <!-- Preloader JavaScript -->
    <script src="js/preloader.js"></script>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <!-- <div class="loader"></div> -->
        <div class="loader">
            <div class="loader-inner ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- END Preloader -->

    <!-- Header -->
    <!-- Header Style 1 -->
    <header class="z-1030 position-relative z-2 shadow-sm">

        <!-- Top Bar - Style 1 -->
        <nav class="top-bar-1 py-0 bg-body-tertiary border-bottom fs-sm">
            <div class="container d-flex flex-wrap align-items-center">
                <ul class="nav me-auto">
                    <li class="nav-item">
                        <a href="services.html" class="nav-link link-body-emphasis px-2 active">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="pricing.html" class="nav-link link-body-emphasis px-2">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="faqs.html" class="nav-link link-body-emphasis px-2">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link link-body-emphasis px-2">About</a>
                    </li>
                </ul>
                <button class="btn btn-sm me-2 btn-light border rounded-circle" id="cm-mode-switcher">
                    <span class="mode-light"></span>
                    <span class="mode-dark"></span>
                </button>
                <div class="dropdown user-dropdown text-end mx-2">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle my-1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img data-src="./images/team/06.jpg" alt="Martin Jones" class="rounded-circle border border-light-subtle lazy" width="24" height="24">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small fs-sm py-0 overflow-hidden">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center py-2" href="vendor-profile.html">
                                <img data-src="./images/team/06.jpg" class="rounded-circle border shadow-sm large lazy" alt="Martin Jones" width="45" height="45">
                                <div class="fs-sm ms-2">
                                    <span class="d-block">Martin Jones</span>
                                    <small class="text-muted">Car Enthusiast</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="vendor-profile.html">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-listings.html">Listings <span class="badge text-bg-primary custom-color rounded-1 d-flex align-self-center py-1">15</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-favorites.html">Favorites <span class="badge text-bg-primary custom-color rounded-1 d-flex align-self-center py-1">7</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-reviews.html">Reviews <span class="badge text-bg-primary custom-color rounded-1 d-flex align-self-center py-1">13</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-reviews-received.html">Reviews Received <span class="badge text-bg-primary custom-color rounded-1 d-flex align-self-center py-1">14</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-messages.html">Messages <span class="badge text-bg-primary custom-color rounded-1 d-flex align-self-center py-1">12</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="account-settings-profile.html">Settings</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">Help</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="add-listing.html" class="nav-link link-body-emphasis px-2">Sell Car</a>
                    </li>
                    <li class="nav-item">
                        <a href="auth-login.html" class="nav-link link-body-emphasis px-2">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="auth-signup.html" class="nav-link link-body-emphasis px-2">Sign up</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END Top Bar - Style 1 -->

        <div class="container d-flex flex-wrap justify-content-between align-items-center py-4 pb-0 pb-md-4 border-bottom overflow-hidden">
            <div class="logo mb-3 mx-auto m-lg-0 mb-lg-0">
                <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-decoration-none" href="index.html">
                    <img class="logo-dark" src="images/logo.png" alt="CARMART">
                    <img class="logo-light" src="images/logo-light.png" alt="CARMART">
                </a>
            </div>
            <div class="header-widgets col-12 col-lg-auto mb-1 mb-md-3 mb-lg-0">
                <div class="row g-4 g-md-5 row-cols-1 row-cols-md-3">
                    <div class="h-widget-location pb-md-0 pb-4 d-inline-flex align-items-center justify-content-center position-relative">
                        <div class="h-widget-icon me-3 text-primary custom-color">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="34" height="34" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7"></path>
                                <path d="M9 4v13"></path>
                                <path d="M15 7v5"></path>
                                <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z"></path>
                                <path d="M19 18v.01"></path>
                            </svg>
                        </div>
                        <div class="h-widget-content">
                            <p class="m-0 text-nowrap">Our Location
                                <br>
                                <span class="text-muted">77 McKinney, Texas</span>
                            </p>
                        </div>
                        <div class="vr opacity-15 position-absolute end-0 top-0 h-100 d-none d-md-block m-0 ms-md-3 ms-lg-0"></div>
                        <hr class="hr opacity-15 position-absolute end-0 bottom-0 w-100 d-block d-md-none m-0">
                    </div>
                    <div class="h-widget-contact pb-md-0 pb-4 d-inline-flex align-items-center justify-content-center position-relative">
                        <div class="h-widget-icon me-3 text-primary custom-color">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="34" height="34" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                            </svg>
                        </div>
                        <div class="h-widget-content">
                            <p class="m-0 text-nowrap">+1 (800) 445 6677
                                <br>
                                <span class="text-muted">info@carmart.com</span>
                            </p>
                        </div>
                        <div class="vr opacity-15 position-absolute end-0 top-0 h-100 d-none d-md-block m-0 ms-md-3 ms-lg-0"></div>
                        <hr class="hr opacity-15 position-absolute end-0 bottom-0 w-100 d-block d-md-none m-0">
                    </div>
                    <div class="h-widget-time pb-md-0 pb-4 d-inline-flex align-items-center justify-content-center">
                        <div class="h-widget-icon me-3 text-primary custom-color">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="34" height="34" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                <path d="M12 7v5l3 3"></path>
                            </svg>
                        </div>
                        <div class="h-widget-content">
                            <p class="m-0 text-nowrap">Mon - Sat: 9AM - 5PM
                                <br>
                                <span class="text-muted">Sunday Closed</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav - Style 1 -->
        <div class="main-nav-1 container p-0 position-relative d-flex">
            <nav class="navbar navbar-expand-lg z-1030 p-0" aria-label="Main navigation">
                <div class="container d-flex flex-wrap p-2 p-lg-0">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navMain">

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 me-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle link-body-emphasis px-3 py-3 fw-bold custom-color" href="https://www.themecrest.top/" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v1.html">Home v1 Classifieds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v2.html">Home v2 Classifieds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v3.html">Home v3 Classifieds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v4.html">Home v4 Classifieds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v5.html">Home v5 Classifieds</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v6.html">Home v6 Dealership</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v7.html">Home v7 Dealership</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v8.html">Home v8 Dealership</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v9.html">Home v9 Dealership</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="home-v10.html">Home v10 Dealership</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="used-cars.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Used</a>
                            </li>
                            <li class="nav-item">
                                <a href="new-cars.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">New</a>
                            </li>
                            <li class="nav-item">
                                <a href="cars-sold.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Sold</a>
                            </li>
                            <li class="nav-item">
                                <a href="reviews.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Reviews</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle link-body-emphasis px-3 py-3 fw-bold custom-color" href="#" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Car</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="car-filter-grid.html">Car Search Grid</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="car-filter-list.html">Car Search List</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="car-details.html">Car Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="car-details-v2.html">Car Details v2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="cars-sold.html">Sold Cars</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="car-sold-details.html">Sold Car Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="add-listing.html">Add Car Listing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="vendor-profile.html">Car Vendor Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-profile.html">Edit Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-favorites.html">Favorites</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-listings.html">Listings</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="add-listing.html">Add Listing</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-reviews.html">Reviews Given</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-reviews-received.html">Reviews Received</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-messages.html">Messages</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-security.html">Security</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-notifications.html">Notifications</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-messages.html">Messages</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="account-settings-delete.html">Delete Account</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog Grid</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-grid-4-cols.html">Four Columns</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-grid-3-cols.html">Three Columns</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-grid-sidebar-left.html">Grid Sidebar Left</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-grid-sidebar-right.html">Grid Sidebar Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog List</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-list-sidebar-left.html">List Sidebar Left</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-list-sidebar-right.html">List Sidebar Right</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="blog-minimal.html">Blog Minimal</a>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Blog Article</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-article-classic.html">Article Classic</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-article-classic-2.html">Article Classic 2</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-article-minimal.html">Article Minimal</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="blog-article-minimal-2.html">Article Minimal 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="blog-authors.html">Blog Authors</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="blog-author-profile.html">Author Profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="blog-author-profile-2.html">Author Profile 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Company</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="about.html">About Us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="about-v2.html">About Us 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="services.html">Services</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="services-v2.html">Services 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="team.html">Team</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="team-v2.html">Team 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="careers.html">Careers</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="career-details.html">Career Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="career-application.html">Career Application</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Auth Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-login.html">Login Default</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-login-fullscreen.html">Login Fullscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-login-modern.html">Login Modern</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-login-cover.html">Login Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Signup</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-signup.html">Signup Default</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-signup-fullscreen.html">Signup Fullscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-signup-modern.html">Signup Modern</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-signup-cover.html">Signup Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Reset Password</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-forgot-password.html">Password Default</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-forgot-password-fullscreen.html">Password Fullscreen</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-forgot-password-modern.html">Password Modern</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item custom-color" href="auth-forgot-password-cover.html">Password Cover</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Reviews</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="reviews.html">All Reviews</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="review-details.html">Review Details</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="review-details-v2.html">Review Details v2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="reviewers.html">Reviewers</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="reviewer-profile.html">Reviewer Profile</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="brands.html">Brands v1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="brands-v2.html">Brands v2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="compare.html">Compare</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item custom-color" href="testimonials.html">Testimonials</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">FAQs</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="faqs.html">FAQs 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="faqs-v2.html">FAQs 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="faqs-v3.html">FAQs 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Pricing</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="pricing.html">Pricing 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="pricing-v2.html">Pricing 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Utility</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="cookie-policy.html">Cookie Policy</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="privacy-policy.html">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="terms-of-service.html">Terms of Service</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="contact.html">Contact v1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="contact-v2.html">Contact v2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="contact-v3.html">Contact v3</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="contact-v4.html">Contact v4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-item custom-color dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Errors</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item custom-color" href="error-403.html">Error 403</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="error-404.html">Error 404</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item custom-color" href="error-500.html">Error 500</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="header-access-icons d-flex ms-auto me-2 align-items-center">
                <div class="header-messages rounded-cirlce">
                    <a href="account-messages.html" class="btn btn-sm position-relative btn-light border rounded-circle ms-2 fs-xs" role="button">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark z-2">
                            7
                            <span class="visually-hidden">Messages</span>
                        </span>
                    </a>
                </div>
                <div class="header-compare rounded-cirlce">
                    <a href="compare.html" class="btn btn-sm position-relative btn-light border rounded-circle ms-2 fs-xs" role="button">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark z-2">
                            4
                            <span class="visually-hidden">Compare items</span>
                        </span>
                    </a>
                </div>
                <div class="header-favorites rounded-cirlce">
                    <a href="account-favorites.html" class="btn btn-sm position-relative btn-light border rounded-circle ms-2 fs-xs" role="button">
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark z-2">
                            3
                            <span class="visually-hidden">Favorites items</span>
                        </span>
                    </a>
                </div>
                <div class="header-search rounded-cirlce">
                    <button class="btn btn-sm position-relative btn-light border rounded-circle ms-2 fs-xs" type="button"></button>
                </div>

            </div>

        </div>
        <!-- END Nav - Style 1 -->

    </header>
    <!-- END Header Style 1 -->
    <!-- END Header -->

    <!-- Breadcrumb -->

    <!-- Breadcrumb Style 1 -->
    <div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

        <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

            <div class="order-lg-2 mb-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start m-0 fs-sm">
                        <li class="breadcrumb-item">
                            <a class="link-body-emphasis text-nowrap link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-50-hover" href="index-2.html">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home mt-n1-sm me-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                </svg>Home
                            </a>
                        </li>

                        <li class="breadcrumb-item text-nowrap">
                            <a class="link-body-emphasis text-nowrap link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-50-hover" href="#">Cars</a>
                        </li>
                        <li class="breadcrumb-item text-nowrap active" aria-current="page">BMW X5</li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Breadcrumb Style 1 -->







    <!-- END Breadcrumb -->

    <!-- Main -->
    <main>


























































































        <div class="container car-details py-5 mb-2 mb-md-4">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-8 pb-4">
                            <div class="h-100 car-title bg-body-tertiary border rounded-2 p-3 position-relative">
                                <h1 class="fw-bold car-name fs-special fs-2 p-0 m-0 text-body-emphasis">BMW X5</h1>
                                <div class="mt-3 fs-sm">
                                    <div class="d-md-inline-flex d-flex justify-content-start">
                                        <div class="car-id me-md-4">
                                            <span class="car-id-icon text-uppercase fw-bold">Stock #:</span>
                                            <span class="text-body-secondary">74587</span>
                                        </div>
                                        <div class="car-date me-md-4">
                                            <span class="car-vin-icon text-uppercase fw-bold">Added:</span>
                                            <span class="text-body-secondary">15, Aug 2023</span>
                                        </div>
                                    </div>
                                    <div class="d-md-inline-flex d-flex justify-content-start">
                                        <div class="car-vin me-md-4">
                                            <span class="car-vin-icon text-uppercase fw-bold">Vin:</span>
                                            <span class="text-body-secondary">1G54A547136H66J98</span>
                                        </div>
                                        <div class="car-views me-md-4">
                                            <span class="car-vin-icon text-uppercase fw-bold">Views:</span>
                                            <span class="text-body-secondary">5314</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="favorites-button position-absolute end-0 top-0 pt-3 pe-3 z-2">
                                    <span data-bs-toggle="modal" data-bs-target="#socialShare">
                                        <button type="button" class="btn btn-share rounded-circle shadow-sm p-0 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share"></button>
                                    </span>
                                    <button type="button" class="btn btn-compare rounded-circle shadow-sm p-0 me-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to Compare"></button>
                                    <button type="button" class="btn btn-favorites p-0 rounded-circle shadow-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>
                                </div>
                                <!-- Modal Social Share -->
                                <div class="modal fade social-share-modal" id="socialShare" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="socialShareLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                                        <div class="modal-content">
                                            <div class="modal-header bg-secondary-subtle py-2">
                                                <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-lg-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div id="socialShareLabel" class="d-none">Share on Social Media</div>

                                                        <div class="content">
                                                            <p>Share this link via</p>
                                                            <ul class="social-icons list-unstyled">
                                                                <a href="#" class="text-decoration-none rounded-circle facebook me-2"></a>
                                                                <a href="#" class="text-decoration-none rounded-circle x me-2"></a>
                                                                <a href="#" class="text-decoration-none rounded-circle instagram me-2"></a>
                                                                <a href="#" class="text-decoration-none rounded-circle whatsapp me-2"></a>
                                                                <a href="#" class="text-decoration-none rounded-circle telegram me-2"></a>
                                                            </ul>
                                                            <p>Or copy link</p>
                                                            <div class="copy-field-wrapper">
                                                                <form class="row g-2">
                                                                    <div class="col-auto">
                                                                        <div class="input-group input-group-sm">
                                                                            <span class="input-group-text" id="basic-addon1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link" width="18" height="18" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                    <path d="M9 15l6 -6"></path>
                                                                                    <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                                                                                    <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <input type="text" readonly class="form-control custom-color" id="copy-link-share" readonly value="https://www.themecrest.xyz/themes/carmart/demo/car-details.html">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <button class="btn btn-sm btn-success copy-btn">Copy</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END - Modal Social Share -->
                            </div>
                        </div>
                        <div class="col-lg-4 pb-4">
                            <div class="h-100 bg-body-tertiary border rounded-2 p-3 d-flex justify-content-between">
                                <div class="price-text">
                                    <span class="price-text d-block fs-2">Price</span>
                                    <span class="price-neg d-block text-body-secondary">Negotiable</span>
                                </div>
                                <div class="car-price text-end">
                                    <span class="price-val d-block fs-special fs-2 fw-bold text-body-emphasis text-primary custom-color">$95,000</span>
                                    <div class="d-flex flex-grow-1 align-items-center justify-content-end">
                                        <span class="price-val-extra text-body-secondary fs-xs border bg-body rounded-pill px-2 pe-1 lh-lg d-flex align-items-center position-relative">$4,245/m
                                            <a tabindex="0" class="ps-1 lh-sm link-secondary stretched-link popover-dismiss" role="button" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="focus" data-bs-title="Monthly Payment" data-bs-content="Estimated monthly payment based on loan amount, payment term, trade in value and expected taxes.">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                    <path d="M12 9h.01"></path>
                                                    <path d="M11 12h1v4h1"></path>
                                                </svg>
                                            </a>
                                        </span>
                                        <button type="button" class="btn btn-warning btn-sm ms-2 fs-xs" data-bs-toggle="modal" data-bs-target="#addOfferModal">Make an Offer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Add Offer  -->
                <div class="modal fade add-offer-modal" id="addOfferModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addOfferModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary-subtle py-2">
                                <h5 class="modal-title">Add Your Offer</h5>
                                <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-lg-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="addOfferModalLabel" class="d-none">Add Offer</div>

                                        <!-- Add Offer -->
                                        <form id="add-offer-form" action="#">
                                            <div class="mb-3">
                                                <label for="user-title" class="form-label">Title</label>
                                                <select class="form-select custom-color text-dark-emphasis rounded-1" name="user-salutation" aria-label="Select your title and salutation">
                                                    <option selected>Select title</option>
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                    <option value="miss">Miss</option>
                                                    <option value="sir">Sir</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-name" class="form-label">Name</label>
                                                <input type="text" class="form-control custom-color" id="user-name" name="user-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                </label>
                                                <input type="text" class="form-control custom-color" id="user-phone" name="user-phone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-email" class="form-label">Email</label>
                                                <input type="email" class="form-control custom-color" id="user-email" name="user-email" aria-describedby="offerEmailHelp">
                                                <div id="offerEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-offer" class="form-label">Your Offer Price</label>
                                                <input type="text" class="form-control custom-color" id="user-offer" name="user-offer">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-add-offer" name="confirm-terms-add-offer" checked>
                                                <label class="form-check-label text-body-secondary" for="confirm-terms-add-offer">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                                        </form>
                                        <!-- END Add Offer -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END - Modal Add Offer -->

                <div class="col-lg-8">

                    <!-- Car Media -->
                    <ul class="nav nav-tabs custom-color justify-content-center mb-4" id="carTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-body-emphasis fw-bold fs-6 py-3 px-4 active" id="car-pictures-tab" data-bs-toggle="tab" data-bs-target="#car-pictures" type="button" role="tab" aria-controls="car-pictures" aria-selected="true">Gallery <span class="badge rounded-pill bg-secondary text-bg-secondary  text-bg-primary ms-1">15</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-body-emphasis fw-bold fs-6 py-3 px-4" id="car-videos-tab" data-bs-toggle="tab" data-bs-target="#car-videos" type="button" role="tab" aria-controls="car-videos" aria-selected="false">Videos <span class="badge rounded-pill bg-secondary text-bg-secondary  text-bg-primary ms-1">2</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-body-emphasis fw-bold fs-6 py-3 px-4" id="car-360-view-tab" data-bs-toggle="tab" data-bs-target="#car-360-view" type="button" role="tab" aria-controls="car-360-view" aria-selected="false">360° View</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="carTabsContent">
                        <div class="tab-pane car-pictures fade show active" id="car-pictures" role="tabpanel" aria-labelledby="car-pictures-tab" tabindex="0">

                            <div class="car-photos mb-4 pb-3 position-relative">

                                <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">
                                    <button type="button" class="btn btn-slider-zoomin p-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-zoom-in" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                            <path d="M7 10l6 0"></path>
                                            <path d="M10 7l0 6"></path>
                                            <path d="M21 21l-6 -6"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div id="sync1" class="owl-carousel owl-theme popup-gallery rounded-2">

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/01.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/01.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/02.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/02.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/03.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/03.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/04.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/04.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/05.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/05.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/06.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/06.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/07.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/07.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/08.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/08.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="item rounded-2">
                                        <a href="images/cars/bmw-x5/09.jpg" data-effect="mfp-zoom-in" title="">
                                            <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/09.jpg" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>

                                <div id="sync2" class="owl-carousel owl-theme position-relative">

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/01.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/02.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/03.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/04.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/05.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/06.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/07.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/08.jpg" alt="" srcset="">
                                    </div>

                                    <div class="item rounded-2">
                                        <img class="img-fluid object-fit-cover rounded-2" src="images/cars/bmw-x5/09.jpg" alt="" srcset="">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="car-videos" role="tabpanel" aria-labelledby="car-videos-tab" tabindex="0">

                            <div class="car-photos mb-4 pb-3 position-relative">

                                <div id="videoSync1" class="owl-carousel owl-theme custom-color">

                                    <div id="video-item-1" class="video-item rounded-2">
                                        <video class="car-video-player" playsinline controls data-poster="./videos/cars/bmw-x5/01.png" data-plyr-config='{ "title": "Front side" }'>
                                            <source src="videos/cars/bmw-x5/01.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>

                                    <div id="video-item-0" class="plyr__video-embed">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qZnaHOkGqNg?si=G20W5J-uEaIfavap&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div>
                                </div>

                                <div id="videoSync2" class="owl-carousel owl-theme">

                                    <div id="video-thumb-1" class="item video-thumb rounded-2 cursor-pointer">
                                        <img class="img-fluid object-fit-cover rounded-2" src="videos/cars/bmw-x5/01.png" alt="Thumbnail 1 &ndash; Front side" srcset="">
                                    </div>

                                    <div id="video-thumb-0" class="item video-thumb rounded-2 cursor-pointer">
                                        <img class="img-fluid object-fit-cover rounded-2" src="videos/cars/bmw-x5/03.jpg" alt="Thumbnail 3 &ndash; Exterior and Interior" srcset="">
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane fade" id="car-360-view" role="tabpanel" aria-labelledby="car-360-view-tab" tabindex="0">

                            <div class="360-car-photos mb-4 pb-3 position-relative custom-color">

                                <div class="image-spin-360">
                                    <img src="images/360/01.jpg" alt="Image 01">
                                    <img src="images/360/02.jpg" alt="Image 02">
                                    <img src="images/360/03.jpg" alt="Image 03">
                                    <img src="images/360/04.jpg" alt="Image 04">
                                    <img src="images/360/05.jpg" alt="Image 05">
                                    <img src="images/360/06.jpg" alt="Image 06">
                                    <img src="images/360/07.jpg" alt="Image 07">
                                    <img src="images/360/08.jpg" alt="Image 08">
                                    <img src="images/360/09.jpg" alt="Image 09">
                                    <img src="images/360/10.jpg" alt="Image 10">
                                    <img src="images/360/11.jpg" alt="Image 11">
                                    <img src="images/360/12.jpg" alt="Image 12">
                                    <img src="images/360/13.jpg" alt="Image 13">
                                    <img src="images/360/14.jpg" alt="Image 14">
                                    <img src="images/360/15.jpg" alt="Image 15">
                                    <img src="images/360/16.jpg" alt="Image 16">
                                    <img src="images/360/17.jpg" alt="Image 17">
                                    <img src="images/360/18.jpg" alt="Image 18">
                                    <img src="images/360/19.jpg" alt="Image 19">
                                    <img src="images/360/20.jpg" alt="Image 20">
                                    <img src="images/360/21.jpg" alt="Image 21">
                                    <img src="images/360/22.jpg" alt="Image 22">
                                    <img src="images/360/23.jpg" alt="Image 23">
                                    <img src="images/360/24.jpg" alt="Image 24">
                                    <img src="images/360/25.jpg" alt="Image 25">
                                    <img src="images/360/26.jpg" alt="Image 26">
                                    <img src="images/360/27.jpg" alt="Image 27">
                                    <img src="images/360/28.jpg" alt="Image 28">
                                    <img src="images/360/29.jpg" alt="Image 29">
                                    <img src="images/360/30.jpg" alt="Image 30">
                                    <img src="images/360/31.jpg" alt="Image 31">
                                    <img src="images/360/32.jpg" alt="Image 32">
                                    <img src="images/360/33.jpg" alt="Image 33">
                                    <img src="images/360/34.jpg" alt="Image 34">
                                    <img src="images/360/35.jpg" alt="Image 35">
                                    <img src="images/360/36.jpg" alt="Image 36">
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Car Description -->
                    <div class="car-description mb-4 pb-3">
                        <h2 class="fs-special fw-bold">Description</h2>
                        <p>Make a statement on the road with this sleek and sporty coupe. With its aerodynamic design and eye-catching
                            details, this car demands attention wherever it goes. Slip into the driver's seat and experience the thrill of
                            its responsive engine and agile handling. </p>

                        <div class="collapse" id="collapseDescription">
                            <p>The meticulously crafted interior offers a blend of luxury and technology, providing a comfortable and
                                connected driving experience. If you're looking for a car that combines style, performance, and
                                sophistication, this coupe is the perfect choice.
                            </p>
                            <p>Embrace the joy of open-air driving with this stunning convertible. With its retractable top, you can enjoy
                                the freedom of the open road at your command. Step inside the refined cabin and experience the perfect
                                balance of luxury and exhilaration.
                            </p>
                            <p>Whether you're cruising along coastal highways or winding through scenic routes, this convertible delivers
                                an unforgettable driving experience. With its powerful engine and precise handling, every drive becomes a
                                memorable adventure. Don't miss out on the opportunity to own this exceptional convertible that offers the
                                perfect blend of style and thrill.
                            </p>
                            <p>Unleash your inner adventurer with this versatile and capable SUV. From city streets to off-road trails,
                                this vehicle handles it all with ease. With its spacious interior and flexible seating options, you can
                                comfortably accommodate passengers and cargo for any journey.
                            </p>
                        </div>

                        <!-- aria-expanded attribute is mandatory -->
                        <!-- bootstrap changes it to true/false on toggle -->
                        <a class="d-block mt-n1 text-center custom-color" data-bs-toggle="collapse" href="#collapseDescription" role="button" aria-expanded="false" aria-controls="collapseDescription">
                            <span class="collapsed">Show More</span>
                            <span class="expanded">Show Less</span>
                        </a>
                    </div>

                    <!-- Car Features -->
                    <div class="car-features mb-4 pb-3">
                        <h2 class="fs-special fw-bold">Features</h2>
                        <div class="accordion" id="accordionFeatures">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color" type="button" data-bs-toggle="collapse" data-bs-target="#exteriorFeatures" aria-expanded="true" aria-controls="exteriorFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M5 17h-2v-6l2 -5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                        </svg> Exterior
                                    </button>
                                </h2>
                                <div id="exteriorFeatures" class="accordion-collapse collapse show" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-horizontal list-group-flush row row-cols-1 row-cols-md-2 border-0">
                                            <li class="list-group-item col border-0 custom-color">22in Alloy Wheels - Forged Cross Spoke Design</li>
                                            <li class="list-group-item col border-0 custom-color">Ambient Lighting i\with Projection</li>
                                            <li class="list-group-item col border-0 custom-color">Exclusive Body Styling</li>
                                            <li class="list-group-item col border-0 custom-color">Performance Brake Calipers Painted Red</li>
                                            <li class="list-group-item col border-0 custom-color">Performance Exhaust System</li>
                                            <li class="list-group-item col border-0 custom-color">Radiator Grille with Sport Logo</li>
                                            <li class="list-group-item col border-0 custom-color">Bumpers - Painted in Body Color</li>
                                            <li class="list-group-item col border-0 custom-color">Door Mirrors - Electrically Adjustable and Heated</li>
                                            <li class="list-group-item col border-0 custom-color">Electric Sunroof - Sliding with One Touch Opening</li>
                                            <li class="list-group-item col border-0 custom-color">Electric Windows - 4</li>
                                            <li class="list-group-item col border-0 custom-color">Exterior Protective Strip wityh Trim Insert in Black</li>
                                            <li class="list-group-item col border-0 custom-color">Heated Windscreen</li>
                                            <li class="list-group-item col border-0 custom-color">Privacy Glass - Dark Glass from B-Pillar Backwards</li>
                                            <li class="list-group-item col border-0 custom-color">Side Running Boards</li>
                                            <li class="list-group-item col border-0 custom-color">Spare Wheel Cover with Staineless Steel</li>
                                            <li class="list-group-item col border-0 custom-color">Summer Tyres</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#interiorFeatures" aria-expanded="false" aria-controls="interiorFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dashboard me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M13.45 11.55l2.05 -2.05"></path>
                                            <path d="M6.4 20a9 9 0 1 1 11.2 0z"></path>
                                        </svg> Interior
                                    </button>
                                </h2>
                                <div id="interiorFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-horizontal list-group-flush row row-cols-1 row-cols-md-2 border-0">
                                            <li class="list-group-item col border-0 custom-color">Ambient Lighting - 64 Color Choice</li>
                                            <li class="list-group-item col border-0 custom-color">Door Sill Panels in Brushed Stainless Steel - Illuminated
                                            </li>
                                            <li class="list-group-item col border-0 custom-color">Floor Mats with Sport Lettering</li>
                                            <li class="list-group-item col border-0 custom-color">Instrument Cluster with Dual Bonded 12.3in Widescreen
                                                Displays </li>
                                            <li class="list-group-item col border-0 custom-color">Performance Steering Wheel in Nappa Leather 3-Spoke Design
                                            </li>
                                            <li class="list-group-item col border-0 custom-color">Steering Wheel Buttons</li>
                                            <li class="list-group-item col border-0 custom-color">Automatic Dimming Rear View Mirror</li>
                                            <li class="list-group-item col border-0 custom-color">Center Armrest Between Front Seats</li>
                                            <li class="list-group-item col border-0 custom-color">Cup Holders - Front x2 and Rear x2</li>
                                            <li class="list-group-item col border-0 custom-color">Dashboard - Nappa Leather</li>
                                            <li class="list-group-item col border-0 custom-color">Front Seats - Heated and Electrically Adjustable</li>
                                            <li class="list-group-item col border-0 custom-color">Front Seats - Ventilated</li>
                                            <li class="list-group-item col border-0 custom-color">Interior Air Ionizationwith Air Filter</li>
                                            <li class="list-group-item col border-0 custom-color">KEYLESS-GO Starting Function</li>
                                            <li class="list-group-item col border-0 custom-color">Luggage Compartment Cover</li>
                                            <li class="list-group-item col border-0 custom-color">Luggage Protection Net</li>
                                            <li class="list-group-item col border-0 custom-color">Rain-Sensing Wipers</li>
                                            <li class="list-group-item col border-0 custom-color">Rear Bench Seat - Spli Folding 1-3 - 2-3</li>
                                            <li class="list-group-item col border-0 custom-color">Roof Liner - DINAMICA Microfibre</li>
                                            <li class="list-group-item col border-0 custom-color">Rear Seats - Heated</li>
                                            <li class="list-group-item col border-0 custom-color">Steering Column - Electrically Adjustable</li>
                                            <li class="list-group-item col border-0 custom-color">Stowage Space Package</li>
                                            <li class="list-group-item col border-0 custom-color">Automatic Climate Control</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safetyFeatures" aria-expanded="false" aria-controls="safetyFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-car-crash me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M7 6l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-5m0 -6h8m-6 0v-5m2 0h-4"></path>
                                            <path d="M14 8v-2"></path>
                                            <path d="M19 12h2"></path>
                                            <path d="M17.5 15.5l1.5 1.5"></path>
                                            <path d="M17.5 8.5l1.5 -1.5"></path>
                                        </svg> Safety
                                    </button>
                                </h2>
                                <div id="safetyFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-horizontal list-group-flush row row-cols-1 row-cols-md-2 border-0">
                                            <li class="list-group-item col border-0 custom-color">ABS - Anti-Lock Braking System</li>
                                            <li class="list-group-item col border-0 custom-color">Active Brake Assist</li>
                                            <li class="list-group-item col border-0 custom-color">Active Lane Keeping Assist</li>
                                            <li class="list-group-item col border-0 custom-color">Adaptive Brake Assist with Hold Function - Hill Start Assist
                                                - Primary and Dry Braking in the Wet</li>
                                            <li class="list-group-item col border-0 custom-color">Airbags - Driver and Front Passenger</li>
                                            <li class="list-group-item col border-0 custom-color">Airbags - Front Side</li>
                                            <li class="list-group-item col border-0 custom-color">Airbags - Rear Sidebags</li>
                                            <li class="list-group-item col border-0 custom-color">Airbags - Windowbags</li>
                                            <li class="list-group-item col border-0 custom-color">Anti Theft Alarm System with Tow-Away Protection and Interior
                                                Motion Sensor</li>
                                            <li class="list-group-item col border-0 custom-color">Driving Assistance Package</li>
                                            <li class="list-group-item col border-0 custom-color">ESP - Electronic Stability Programme with ASR - Acceleration
                                                Skid Control</li>
                                            <li class="list-group-item col border-0 custom-color">4ETS - Four-Wheel Electronic Traction System</li>
                                            <li class="list-group-item col border-0 custom-color">i-Size Child Seat Attachment for Outer Rear Seats</li>
                                            <li class="list-group-item col border-0 custom-color">PRE-SAFE System for Preventive Occupant Protection</li>
                                            <li class="list-group-item col border-0 custom-color">Seat Belt Pre-Tensioners - 4</li>
                                            <li class="list-group-item col border-0 custom-color">Seat Belts - 3-Point Design in Black</li>
                                            <li class="list-group-item col border-0 custom-color">Trailer Coupling with ESP Trailer Stabilisation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securityFeatures" aria-expanded="false" aria-controls="securityFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                                            <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M12 12l0 2.5"></path>
                                        </svg> Security
                                    </button>
                                </h2>
                                <div id="securityFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-horizontal list-group-flush row row-cols-1 row-cols-md-2 border-0">
                                            <li class="list-group-item col border-0 custom-color">Immobilizer</li>
                                            <li class="list-group-item col border-0 custom-color">Keyless Entry</li>
                                            <li class="list-group-item col border-0 custom-color">Keyless Ignition</li>
                                            <li class="list-group-item col border-0 custom-color">Preparation for Vehicle Tracking</li>
                                            <li class="list-group-item col border-0 custom-color">Remote Central Locking</li>
                                            <li class="list-group-item col border-0 custom-color">Volumetric Anti-Theft Alarm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#engineFeatures" aria-expanded="false" aria-controls="engineFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-engine me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 10v6"></path>
                                            <path d="M12 5v3"></path>
                                            <path d="M10 5h4"></path>
                                            <path d="M5 13h-2"></path>
                                            <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z"></path>
                                        </svg> Engine & Drive Train
                                    </button>
                                </h2>
                                <div id="engineFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Camshaft</th>
                                                    <td>DOHC</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Transmission</th>
                                                    <td>Automatic </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Number of Gears</th>
                                                    <td>9 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cylinder Layout</th>
                                                    <td>V8 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Cylinders</th>
                                                    <td>8 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">CC</th>
                                                    <td>3999 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Noise Level dB(A)</th>
                                                    <td>3800 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#performanceFeatures" aria-expanded="false" aria-controls="performanceFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gauge me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                            <path d="M13.41 10.59l2.59 -2.59"></path>
                                            <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                        </svg> Performance
                                    </button>
                                </h2>
                                <div id="performanceFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Engine Size</th>
                                                    <td>3999 cc </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Top Speed</th>
                                                    <td>255 mph </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">0-62mph</th>
                                                    <td>2.6 sec </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Torque (lbs/ft)</th>
                                                    <td>627 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Torque (NM)</th>
                                                    <td>2500 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Torque (RPM)</th>
                                                    <td>850 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Power (KW)</th>
                                                    <td>430 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Power (BHP)</th>
                                                    <td>577 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Power (RPM)</th>
                                                    <td>6000 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dimensionFeatures" aria-expanded="false" aria-controls="dimensionFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-ruler-measure me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M19.875 12c.621 0 1.125 .512 1.125 1.143v5.714c0 .631 -.504 1.143 -1.125 1.143h-15.875a1 1 0 0 1 -1 -1v-5.857c0 -.631 .504 -1.143 1.125 -1.143h15.75z"></path>
                                            <path d="M9 12v2"></path>
                                            <path d="M6 12v3"></path>
                                            <path d="M12 12v3"></path>
                                            <path d="M18 12v3"></path>
                                            <path d="M15 12v2"></path>
                                            <path d="M3 3v4"></path>
                                            <path d="M3 5h18"></path>
                                            <path d="M21 3v4"></path>
                                        </svg> Dimensions
                                    </button>
                                </h2>
                                <div id="dimensionFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Height</th>
                                                    <td>1159 mm </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Length</th>
                                                    <td>4462 mm </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Width</th>
                                                    <td>1988 mm </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Wheelbase</th>
                                                    <td>2980 mm </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fuel Tank</th>
                                                    <td>75 litres</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-5 fw-bold custom-color collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#consumptionFeatures" aria-expanded="false" aria-controls="consumptionFeatures">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gas-station me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                            <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                            <path d="M3 20l12 0"></path>
                                            <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                            <path d="M4 11l10 0"></path>
                                        </svg> Consumption & Emmissions
                                    </button>
                                </h2>
                                <div id="consumptionFeatures" class="accordion-collapse collapse" data-bs-parent="#accordionFeatures">
                                    <div class="accordion-body">
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Extra Urban (mpg)</th>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Urban (mpg)</th>
                                                    <td>9.6</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Combined (mpg)</th>
                                                    <td>13.1 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">CO2 (g/km)</th>
                                                    <td>539 </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Standard Euro Emmissions</th>
                                                    <td>EURO 6</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Ultra Low Emmission Zone</th>
                                                    <td>Compliant</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Financing Calculator -->
                    <div class="financing-calculator bg-body-tertiary border rounded-2 p-3 p-sm-4 mb-5">
                        <h5 class="fw-bold fs-special fs-4 pb-3 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calculator me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 3m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                <path d="M8 7m0 1a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-6a1 1 0 0 1 -1 -1z"></path>
                                <path d="M8 14l0 .01"></path>
                                <path d="M12 14l0 .01"></path>
                                <path d="M16 14l0 .01"></path>
                                <path d="M8 17l0 .01"></path>
                                <path d="M12 17l0 .01"></path>
                                <path d="M16 17l0 .01"></path>
                            </svg>Financing Calculator
                        </h5>
                        <form id="loan-calculator-form" class="needs-validation" novalidate action="#">
                            <div class="mb-3 row">
                                <label for="carPrice" class="col-sm-3 col-form-label text-sm-end">Car Price:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <button class="loan-currency-btn btn btn-outline-secondary dropdown-toggle rounded-start border" type="button" data-bs-toggle="dropdown" aria-expanded="false">$</button>
                                        <ul class="loan-currencies dropdown-menu overflow-hidden p-0">
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="$">$</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="€">€</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="¥">¥</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="₹">₹</li>
                                        </ul>
                                        <input type="text" class="form-control rounded-end bg-body" id="carPrice" name="carPrice" value="95000" required>
                                        <div class="invalid-feedback">Please enter car price.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="downPayment" class="col-sm-3 col-form-label text-sm-end">Down Payment:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <button class="loan-currency-btn btn btn-outline-secondary dropdown-toggle rounded-start border" type="button" data-bs-toggle="dropdown" aria-expanded="false">$</button>
                                        <ul class="loan-currencies dropdown-menu overflow-hidden p-0">
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="$">$</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="€">€</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="¥">¥</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="₹">₹</li>
                                        </ul>
                                        <input type="text" class="form-control rounded-end bg-body" id="downPayment" name="downPayment" value="0" required>
                                        <div class="invalid-feedback">Please enter down payment amount.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tradeInValue" class="col-sm-3 col-form-label text-sm-end">Trade-in Value:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <button class="loan-currency-btn btn btn-outline-secondary dropdown-toggle rounded-start border" type="button" data-bs-toggle="dropdown" aria-expanded="false">$</button>
                                        <ul class="loan-currencies dropdown-menu overflow-hidden p-0">
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="$">$</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="€">€</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="¥">¥</li>
                                            <li class="loan-currency dropdown-item cursor-pointer" data-loan-currency="₹">₹</li>
                                        </ul>
                                        <input type="text" class="form-control rounded-end bg-body" id="tradeInValue" name="tradeInValue" value="0" required>
                                        <div class="invalid-feedback">Please enter trade-in amount.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="interestRate" class="col-sm-3 col-form-label text-sm-end">Interest Rate:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-body" id="interestRate" name="interestRate" value="3.5" required>
                                        <span class="input-group-text text-secondary rounded-end">%</span>
                                        <div class="invalid-feedback">Please enter loan interest rate.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="loanTerm" class="col-sm-3 col-form-label text-sm-end">Loan Term:</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control" name="termType" id="termType" value="months">
                                        <input type="text" class="form-control rounded-start bg-body" id="loanTerm" name="loanTerm" value="12" required>
                                        <button class="term-type-btn btn btn-outline-secondary dropdown-toggle rounded-end border" type="button" data-bs-toggle="dropdown" aria-expanded="false">Months</button>
                                        <ul class="term-types dropdown-menu dropdown-menu-end overflow-hidden p-0">
                                            <li class="term-type dropdown-item cursor-pointer" data-term-type="months">Months</li>
                                            <li class="term-type dropdown-item cursor-pointer" data-term-type="years">Years</li>
                                        </ul>
                                        <div class="invalid-feedback">Please enter loan term in months or years.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-9 ms-auto">
                                    <input type="hidden" class="form-control bg-body" id="loanCurrency" name="loanCurrency" value="$">
                                    <button class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" type="submit">Calculate</button>
                                </div>
                            </div>
                        </form>
                        <div class="loan-calculator-results d-none">
                            <h5 class="fw-bold fs-special fs-4 pb-3 d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calculator-filled me-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M18 2a3 3 0 0 1 3 3v14a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-14a3 3 0 0 1 3 -3zm-10 15a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm-8 -4a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm-1 -7h-6a2 2 0 0 0 -2 2v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-1a2 2 0 0 0 -2 -2z" stroke-width="0" fill="currentColor"></path>
                                </svg> Results:
                            </h5>
                            <div class="mb-3 row">
                                <div class="col-sm-3 text-sm-end">Total Financed:</div>
                                <div class="col-sm-9">
                                    <span id="totalAmountFinanced" class="fw-bold fs-special"></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3 text-sm-end">Total Payments:</div>
                                <div class="col-sm-9">
                                    <span id="totalPayments" class="fw-bold fs-special"></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3 text-sm-end">Monthly Payment:</div>
                                <div class="col-sm-9">
                                    <span id="monthlyPayments" class="fw-bold fs-special"></span>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-3 text-sm-end">Yearly Payment:</div>
                                <div class="col-sm-9">
                                    <span id="yearlyPayments" class="fw-bold fs-special"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <!-- Info -->
                    <div class="sticky-top">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="fw-bold fs-special fs-4 mb-1">Overview</h5>
                            </div>
                            <ul class="list-group list-group-flush m-3 border-0 my-0">
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Year</span>
                                    <span class="fw-bold">2022</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Odometer</span>
                                    <span class="fw-bold">27,500km</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Fuel Type</span>
                                    <span class="fw-bold">Petrol</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Transmission</span>
                                    <span class="fw-bold">Automatic</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Engine</span>
                                    <span class="fw-bold">4.0L/4000cc</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Body</span>
                                    <span class="fw-bold">Coupe</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Color</span>
                                    <span class="fw-bold">Yellow</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between list-group-item-light border mb-1 rounded-1">
                                    <span>Doors</span>
                                    <span class="fw-bold">5</span>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="container p-0">
                                    <div class="row row-cols-1 g-2">
                                        <div class="col">
                                            <button type="button" class="btn btn-warning w-100 d-flex justify-content-start align-items-center rounded-1" data-bs-toggle="modal" data-bs-target="#reserveVehicle">
                                                <span class="me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z"></path>
                                                        <path d="M10 16h6"></path>
                                                        <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M4 8h3"></path>
                                                        <path d="M4 12h3"></path>
                                                        <path d="M4 16h3"></path>
                                                    </svg>
                                                </span>
                                                <span class="">Reserve Vehicle</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-warning w-100 d-flex justify-content-start align-items-center rounded-1" data-bs-toggle="modal" data-bs-target="#bookTestdrive">
                                                <span class="me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-steering-wheel" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 14l0 7"></path>
                                                        <path d="M10 12l-6.75 -2"></path>
                                                        <path d="M14 12l6.75 -2"></path>
                                                    </svg>
                                                </span>
                                                <span class="">Book Test Drive</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-warning w-100 d-flex justify-content-start align-items-center rounded-1" data-bs-toggle="modal" data-bs-target="#sendEnquiry">
                                                <span class="me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M8 9h8"></path>
                                                        <path d="M8 13h6"></path>
                                                        <path d="M9 18h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-3l-3 3l-3 -3z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <span class="">Send An Enquiry</span>
                                            </button>
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-warning w-100 d-flex justify-content-start align-items-center rounded-1">
                                                <span class="me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path>
                                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path>
                                                    </svg>
                                                </span>
                                                <span class="">Print This Page</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center my-2">
                            <a href="javascript:void()" class="text-center link-secondary link-opacity-75 link-opacity-100-hover text-decoration-none" data-bs-toggle="modal" data-bs-target="#reportListing">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-flag me-1">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 5a5 5 0 0 1 7 0a5 5 0 0 0 7 0v9a5 5 0 0 1 -7 0a5 5 0 0 0 -7 0v-9z" />
                                    <path d="M5 21v-7" />
                                </svg>Report listing
                            </a>
                        </div>
                    </div>

                    <!-- Modal Reserve Vehicle  -->
                    <div class="modal fade reserve-vehicle-modal" id="reserveVehicle" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reserveVehicleLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary-subtle py-2">
                                    <h5 class="modal-title">Reserve Vehicle</h5>
                                    <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="reserveVehicleLabel" class="d-none">Reserve Vehicle</div>

                                            <!-- Reserve Vehicle Form -->
                                            <form id="reserve-vehicle-form" action="#">
                                                <div class="mb-3 pb-1 row g-0">
                                                    <div class="col-12 col-sm-5 mb-3 mb-sm-0">
                                                        <div class="rounded-1 overflow-hidden" style="max-width: 160px; max-height: 90px">
                                                            <img data-src="./images/cars/bmw-x5/01.jpg" class="d-block w-100 rounded-1 lazy" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-7">
                                                        <h6 class="mb-2">2022 BMW X5</h6>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Color:</span>
                                                            <span class="text-body-secondary fs-sm">White</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Stock #:</span>
                                                            <span class="text-body-secondary fs-sm">74587</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">VIN:</span>
                                                            <span class="text-body-secondary fs-sm">1G54A547136H66J98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="hr opacity-15 d-block w-100 my-3">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-title" class="form-label">Title</label>
                                                            <select class="form-select custom-color text-dark-emphasis rounded-1" name="user-salutation" aria-label="Select your title and salutation">
                                                                <option selected>Select title</option>
                                                                <option value="mr">Mr</option>
                                                                <option value="mrs">Mrs</option>
                                                                <option value="miss">Miss</option>
                                                                <option value="sir">Sir</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-name" class="form-label">Name</label>
                                                            <input type="text" class="form-control custom-color" id="user-name" name="user-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <input type="text" class="form-control custom-color" id="user-phone" name="user-phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-email" class="form-label">Email</label>
                                                    <input type="email" class="form-control custom-color" id="user-email" name="user-email" aria-describedby="reserveVehicleEmailHelp">
                                                    <div id="reserveVehicleEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="vehicle-color" class="form-label">Preferred Color</label>
                                                    <input type="text" class="form-control custom-color" id="vehicle-color" name="vehicle-color">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="pickup-date" class="form-label">Desired Pickup Date and Time</label>
                                                    <input type="text" class="form-control custom-color" id="pickup-date" name="pickup-date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-notes" class="form-label">Pickup Details / Return Details / Special Requests</label>
                                                    <textarea class="form-control custom-color" id="user-notes" name="user-notes" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-reserve-car" name="confirm-terms-reserve-car" checked>
                                                    <label class="form-check-label text-body-secondary" for="confirm-terms-reserve-car">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                                            </form>
                                            <!-- END Reserve Vehicle Form -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END - Modal Reserve Vehicle -->
                    <!-- Book Testdrive  -->
                    <div class="modal fade book-testdrive-modal" id="bookTestdrive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bookTestdriveLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary-subtle py-2">
                                    <h5 class="modal-title">Book Testdrive</h5>
                                    <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="bookTestdriveLabel" class="d-none">Book Testdrive</div>

                                            <!-- Book Test Drive -->
                                            <form id="book-test-drive-form" action="#">
                                                <div class="mb-3 pb-1 row g-0">
                                                    <div class="col-12 col-sm-5 mb-3 mb-sm-0">
                                                        <div class="rounded-1 overflow-hidden" style="max-width: 160px; max-height: 90px">
                                                            <img data-src="./images/cars/bmw-x5/01.jpg" class="d-block w-100 rounded-1 lazy" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-7">
                                                        <h6 class="mb-2">2022 BMW X5</h6>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Color:</span>
                                                            <span class="text-body-secondary fs-sm">White</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Stock #:</span>
                                                            <span class="text-body-secondary fs-sm">74587</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">VIN:</span>
                                                            <span class="text-body-secondary fs-sm">1G54A547136H66J98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="hr opacity-15 d-block w-100 my-3">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-title" class="form-label">Title</label>
                                                            <select class="form-select custom-color text-dark-emphasis rounded-1" name="user-salutation" aria-label="Select your title and salutation">
                                                                <option selected>Select title</option>
                                                                <option value="mr">Mr</option>
                                                                <option value="mrs">Mrs</option>
                                                                <option value="miss">Miss</option>
                                                                <option value="sir">Sir</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-first-name" class="form-label">Name</label>
                                                            <input type="text" class="form-control custom-color" id="user-first-name" name="user-first-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <input type="text" class="form-control custom-color" id="user-phone" name="user-phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-email" class="form-label">Email</label>
                                                    <input type="email" class="form-control custom-color" id="user-email" name="user-email" aria-describedby="testDriveEmailHelp">
                                                    <div id="testDriveEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="test-drive-date" class="form-label">Date</label>
                                                    <input type="text" class="form-control custom-color" id="test-drive-date" name="test-drive-date" aria-describedby="testDriveDateHelp">
                                                    <div id="testDriveDateHelp" class="form-text">Select the date you would like to test drive this car.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="test-drive-time" class="form-label">Time</label>
                                                    <input type="text" class="form-control custom-color" id="test-drive-time" name="test-drive-time" aria-describedby="testDriveTimeHelp" placeholder="Morning">
                                                    <div id="testDriveTimeHelp" class="form-text">Select the time you would like to test drive this car.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="test-drive-message" class="form-label">Notes <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <textarea class="form-control custom-color" id="test-drive-message" name="test-drive-message" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-book-testdrive" name="confirm-terms-book-testdrive" checked>
                                                    <label class="form-check-label text-body-secondary" for="confirm-terms-book-testdrive">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                                            </form>
                                            <!-- END Book Test Drive -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END - Book Testdrive -->
                    <!-- Modal Send Enquiry  -->
                    <div class="modal fade send-enquiry-modal" id="sendEnquiry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sendEnquiryLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary-subtle py-2">
                                    <h5 class="modal-title">Send Enquiry</h5>
                                    <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="sendEnquiryLabel" class="d-none">Send Enquiry</div>

                                            <!-- Add Enquiry -->
                                            <form id="add-enquiry-form" action="#">
                                                <div class="mb-3 pb-1 row g-0">
                                                    <div class="col-12 col-sm-5 mb-3 mb-sm-0">
                                                        <div class="rounded-1 overflow-hidden" style="max-width: 160px; max-height: 90px">
                                                            <img data-src="./images/cars/bmw-x5/01.jpg" class="d-block w-100 rounded-1 lazy" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-7">
                                                        <h6 class="mb-2">2022 BMW X5</h6>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Color:</span>
                                                            <span class="text-body-secondary fs-sm">White</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">Stock #:</span>
                                                            <span class="text-body-secondary fs-sm">74587</span>
                                                        </div>
                                                        <div class="w-100 lh-sm">
                                                            <span class="fw-bold me-2 fs-sm">VIN:</span>
                                                            <span class="text-body-secondary fs-sm">1G54A547136H66J98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="hr opacity-15 d-block w-100 my-3">
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-title" class="form-label">Title</label>
                                                            <select class="form-select custom-color text-dark-emphasis rounded-1" name="user-salutation" aria-label="Select your title and salutation">
                                                                <option selected>Select title</option>
                                                                <option value="mr">Mr</option>
                                                                <option value="mrs">Mrs</option>
                                                                <option value="miss">Miss</option>
                                                                <option value="sir">Sir</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="user-name" class="form-label">Name</label>
                                                            <input type="text" class="form-control custom-color" id="user-name" name="user-name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <input type="text" class="form-control custom-color" id="user-phone" name="user-phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-email" class="form-label">Email</label>
                                                    <input type="email" class="form-control custom-color" id="user-email" name="user-email" aria-describedby="enquiryEmailHelp">
                                                    <div id="enquiryEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-enquiry" class="form-label">Notes</label>
                                                    <textarea class="form-control custom-color" id="user-enquiry" name="user-enquiry" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-add-enquiry" name="confirm-terms-add-enquiry" checked>
                                                    <label class="form-check-label text-body-secondary" for="confirm-terms-add-enquiry">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                                            </form>
                                            <!-- END Add Enquiry -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END - Modal Send Enquiry -->
                    <!-- Modal Report Listing  -->
                    <div class="modal fade report-listing-modal" id="reportListing" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reportListingLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" data-simplebar data-simplebar-auto-hide="false">
                            <div class="modal-content">
                                <div class="modal-header bg-secondary-subtle py-2">
                                    <h5 class="modal-title">Report Listing</h5>
                                    <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-lg-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="reportListingLabel" class="d-none">Report Listing</div>

                                            <!-- Report Ad -->
                                            <form id="report-ad-form" action="#">
                                                <div class="mb-3">
                                                    <label for="user-title" class="form-label">Report this ad as:</label>
                                                    <select class="form-select custom-color text-dark-emphasis rounded-1" name="user-report" aria-label="Select ad report reason">
                                                        <option selected></option>
                                                        <option value="sold">Sold</option>
                                                        <option value="duplicate">Duplicate Ad</option>
                                                        <option value="incorrect-images">Incorrect Images</option>
                                                        <option value="blurry-images">Blurry Images</option>
                                                        <option value="watermarked-images">Watermarked Images</option>
                                                        <option value="incorrect-model-make">Incorrect Model/Make</option>
                                                        <option value="incorrect-year">Incorrect Year</option>
                                                        <option value="incorrect-pricing">Incorrect Pricing</option>
                                                        <option value="incorrect-transmission">Incorrect Transmission</option>
                                                        <option value="incorrect-mileage">Incorrect Mileage</option>
                                                        <option value="invalid-contact">Invalid Contact Details</option>
                                                        <option value="irrelevant">Irrelevancy</option>
                                                        <option value="misleading">Misleading Content</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-name" class="form-label">Name</label>
                                                    <input type="text" class="form-control custom-color" id="user-name" name="user-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <input type="text" class="form-control custom-color" id="user-phone" name="user-phone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-email" class="form-label">Email</label>
                                                    <input type="email" class="form-control custom-color" id="user-email" name="user-email" aria-describedby="reportAdEmailHelp">
                                                    <div id="reportAdEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Location</label>
                                                    <input type="text" class="form-control custom-color" id="user-localtion" name="user-location">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-message" class="form-label">Message</label>
                                                    <textarea class="form-control custom-color" id="user-message" name="user-message" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input custom-color" id="confirm-terms" name="confirm-terms" checked>
                                                    <label class="form-check-label text-body-secondary" for="confirm-terms">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                                            </form>
                                            <!-- END Report Ad -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END - Modal Report Listing -->
                </div>

            </div>
        </div>


        <div class="container-fluid p-0 bg-body-tertiary">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="fs-5 text-uppercase pb-3 mb-4 custom-color">Similar Cars on Sale</h3>
                        <div class="similar-cars-carousel basic-carousel owl-carousel owl-theme" data-nav="true">



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel1" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/bmw-x5/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/bmw-x5/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/bmw-x5/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">BMW X5</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$95,895</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2024
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    98m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2500cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    White
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel2" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/volkswagen-tiguan/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/volkswagen-tiguan/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/volkswagen-tiguan/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Volkswagen Tiguan</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$225,125</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2019
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    4,500m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    3500cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Yellow
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>


                                        <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Sold</span>


                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel3" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-g63-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-g63-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-g63-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes G63 AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$49,675</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2019
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    14,500m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    1800cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Diesel
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    White
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel4" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/land-rover-defender/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/land-rover-defender/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/land-rover-defender/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Land Rover Defender</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$85,985</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    6,300
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2900cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Grey
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel5" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel5" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel5" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes A45 S AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$39,458</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    121m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Manual
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2400cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Orange
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel6" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-benz-gle/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-benz-gle/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-benz-gle/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel6" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel6" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedez Benz GLE</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$89,759</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2024
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    0
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Manual
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    5999cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    White
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel7" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/audi-r8/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/audi-r8/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/audi-r8/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel7" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel7" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Audi RS</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$65,495</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    23m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2500cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Green
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel8" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mini-cooper/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mini-cooper/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mini-cooper/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel8" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel8" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mini Cooper</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$38,965</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    25m
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Manual
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    3500cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Grey
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel9" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/suzuki-sx4/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/suzuki-sx4/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/suzuki-sx4/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel9" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel9" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Suzuki SX4</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$29,999</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    14
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    1900cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Blue
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel10" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/peugeot-407/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/peugeot-407/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/peugeot-407/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel10" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel10" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Peugeout 407</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$45,000</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2021
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    10
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    3000cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Black
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel11" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/toyota-camry/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/toyota-camry/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/toyota-camry/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel11" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel11" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Toyota Camry</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$25,500</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2022
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    20
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2500cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    Silver
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel12" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel12" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel12" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes-Benz GT R AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$35,999</span>
                                        </p>
                                        <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                        <path d="M16 3v4"></path>
                                                        <path d="M8 3v4"></path>
                                                        <path d="M4 11h16"></path>
                                                        <path d="M19 16l-2 3h4l-2 3"></path>
                                                    </svg>
                                                    2023
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                        <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M13.41 10.59l2.59 -2.59"></path>
                                                        <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                                    </svg>
                                                    8
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-manual-gearbox" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                        <path d="M5 8l0 8"></path>
                                                        <path d="M12 8l0 8"></path>
                                                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12"></path>
                                                    </svg>
                                                    Automatic
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-engine" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 10v6"></path>
                                                        <path d="M12 5v3"></path>
                                                        <path d="M10 5h4"></path>
                                                        <path d="M5 13h-2"></path>
                                                        <path d="M6 10h2l2 -2h3.382a1 1 0 0 1 .894 .553l1.448 2.894a1 1 0 0 0 .894 .553h1.382v-2h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2v-2h-3v2a1 1 0 0 1 -1 1h-3.465a1 1 0 0 1 -.832 -.445l-1.703 -2.555h-2v-6z">
                                                        </path>
                                                    </svg>
                                                    2000cc
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gas-station" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M14 11h1a2 2 0 0 1 2 2v3a1.5 1.5 0 0 0 3 0v-7l-3 -3"></path>
                                                        <path d="M4 20v-14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v14"></path>
                                                        <path d="M3 20l12 0"></path>
                                                        <path d="M18 7v1a1 1 0 0 0 1 1h1"></path>
                                                        <path d="M4 11l10 0"></path>
                                                    </svg>
                                                    Petrol
                                                </span>
                                            </div>
                                            <div>
                                                <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-palette" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M12 21a9 9 0 0 1 0 -18c4.97 0 9 3.582 9 8c0 1.06 -.474 2.078 -1.318 2.828c-.844 .75 -1.989 1.172 -3.182 1.172h-2.5a2 2 0 0 0 -1 3.75a1.3 1.3 0 0 1 -1 2.25">
                                                        </path>
                                                        <path d="M8.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M12.5 7.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                        <path d="M16.5 10.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                    </svg>
                                                    White
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid p-0">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h3 class="fs-5 text-uppercase pb-3 mb-4 custom-color">Recently Viewed Cars</h3>
                        <div class="recently-viewed-cars-carousel owl-carousel owl-theme" data-nav="false">



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel12" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-gt-r-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel12" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel12" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes-Benz GT R AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$35,999</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel11" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/toyota-camry/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/toyota-camry/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/toyota-camry/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel11" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel11" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Toyota Camry</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$25,500</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel6" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-benz-gle/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-benz-gle/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-benz-gle/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel6" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel6" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedez Benz GLE</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$89,759</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel1" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/bmw-x5/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/bmw-x5/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/bmw-x5/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">BMW X5</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$95,895</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel2" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/volkswagen-tiguan/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/volkswagen-tiguan/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/volkswagen-tiguan/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Volkswagen Tiguan</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$225,125</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>


                                        <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Sold</span>


                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel3" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-g63-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-g63-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-g63-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes G63 AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$49,675</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel4" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/land-rover-defender/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/land-rover-defender/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/land-rover-defender/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Land Rover Defender</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$85,985</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                        <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel5" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mercedes-a45-s-amg/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel5" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel5" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mercedes A45 S AMG</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$39,458</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                                        <button type="button" class="btn btn-favorites favorites-active" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel8" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/mini-cooper/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mini-cooper/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/mini-cooper/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel8" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel8" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Mini Cooper</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$38,965</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel9" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/suzuki-sx4/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/suzuki-sx4/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/suzuki-sx4/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel9" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel9" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Suzuki SX4</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$29,999</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                        <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                                        <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel10" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/peugeot-407/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/peugeot-407/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/peugeot-407/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel10" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel10" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Peugeout 407</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$45,000</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="item">
                                <div class="card border">
                                    <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                        <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                        <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                                    </div>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                        <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                    </div>
                                    <div class="card-image">
                                        <div id="itemCarousel7" class="item-preview carousel slide carousel-fade">
                                            <div class="carousel-inner rounded-top">
                                                <div class="carousel-item listing-image-box rounded-top active">
                                                    <img data-src="./images/cars/audi-r8/01.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/audi-r8/02.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                                <div class="carousel-item listing-image-box">
                                                    <img data-src="./images/cars/audi-r8/03.jpg" class="img-fluid object-fit-cover rounded-top lazy" alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel7" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel7" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">Audi RS</a>
                                        </h3>
                                        <p class="card-text">
                                            <span class="car-price text-primary fs-special fs-6 fw-bold custom-color">$65,495</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                        </div>
                    </div>
                </div>
            </div>
        </div>






































































































        <!-- Miscellaneous -->

        <div class="comparison-toggle z-1030">
            <div class="drawer z-1030 rounded-top-2 rounded-end-0">
                <div class="drawer-toggle bg-secondary text-white d-inline-flex align-items-center px-3 rounded-top end-0">
                    Comparison
                    <a class="stretched-link d-lg-none position-absolute start-0 top-0 w-100 h-100 z-2" data-bs-toggle="offcanvas" href="#comparison-offcanvas" role="button" aria-controls="comparison-offcanvas"></a>
                    <span class="drawer-btn-shine d-none d-lg-block start-0 top-0 w-100 h-100 rounded-top position-absolute z-1 overflow-hidden"></span>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger z-2">
                        <span class="comparison-count">4</span>
                        <span class="visually-hidden">comparison cars</span>
                    </span>
                </div>
                <div id="comparison-offcanvas" class="drawer-body offcanvas-lg offcanvas-end filter-widget-simplebar" data-simplebar data-simplebar-auto-hide="false" data-bs-delay="500">
                    <div class="offcanvas-header border-bottom">
                        <div class="d-flex w-100">
                            <div class="offcanvas-close-btn d-flex align-self-center align-items-center p-0 me-3">
                                <button class="btn p-0" type="button" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#comparison-offcanvas" aria-controls="comparison-offcanvas"></button>
                            </div>
                            <div class="d-flex align-items-center position-relative me-3">
                                <h5 id="comparisonOffcanvasLabel" class="offcanvas-title">Compare</h5>
                            </div>
                            <div class="d-flex justify-content-end w-100 my-auto">
                                <span class="badge bg-primary bg-opacity-10 text-primary ms-2 p-2 px-3 d-flex fs-6 fw-normal rounded-1">4 Cars</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <h5 class="drawer-title d-none d-lg-block">Car Comparison</h5>
                        <h6 class="drawer-subtitle mb-2 text-body-secondary fs-sm">Differences & Similarities</h6>

                        <div class="car-comparison-list mt-3">


                            <!-- Car -->
                            <div class="col-12 compare-item mb-3" data-index="1">
                                <div class="card border bg-body-tertiary">
                                    <span role="button" class="position-absolute top-0 start-100 translate-middle badge remove rounded-circle bg-danger">
                                        <span class="visually-hidden">comparison cars</span>
                                    </span>
                                    <div class="row g-0">
                                        <div class="col-5 card-image">
                                            <img data-src="./images/cars/bmw-x5/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body">
                                                <h3 class="card-title text-truncate mb-0" title="BMW X5">
                                                    <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">BMW X5</a>
                                                </h3>
                                                <p class="card-text mb-2">
                                                    <span class="car-price text-primary fs-special fs-sm fw-bold custom-color">$95,895</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="col-12 compare-item mb-3" data-index="2">
                                <div class="card border bg-body-tertiary">
                                    <span role="button" class="position-absolute top-0 start-100 translate-middle badge remove rounded-circle bg-danger">
                                        <span class="visually-hidden">comparison cars</span>
                                    </span>
                                    <div class="row g-0">
                                        <div class="col-5 card-image">
                                            <img data-src="./images/cars/volkswagen-tiguan/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body">
                                                <h3 class="card-title text-truncate mb-0" title="Volkswagen Tiguan">
                                                    <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Volkswagen Tiguan</a>
                                                </h3>
                                                <p class="card-text mb-2">
                                                    <span class="car-price text-primary fs-special fs-sm fw-bold custom-color">$225,125</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="col-12 compare-item mb-3" data-index="3">
                                <div class="card border bg-body-tertiary">
                                    <span role="button" class="position-absolute top-0 start-100 translate-middle badge remove rounded-circle bg-danger">
                                        <span class="visually-hidden">comparison cars</span>
                                    </span>
                                    <div class="row g-0">
                                        <div class="col-5 card-image">
                                            <img data-src="./images/cars/mercedes-g63-amg/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body">
                                                <h3 class="card-title text-truncate mb-0" title="Mercedes G63 AMG">
                                                    <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedes G63 AMG</a>
                                                </h3>
                                                <p class="card-text mb-2">
                                                    <span class="car-price text-primary fs-special fs-sm fw-bold custom-color">$49,675</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->



                            <!-- Car -->
                            <div class="col-12 compare-item mb-3" data-index="4">
                                <div class="card border bg-body-tertiary">
                                    <span role="button" class="position-absolute top-0 start-100 translate-middle badge remove rounded-circle bg-danger">
                                        <span class="visually-hidden">comparison cars</span>
                                    </span>
                                    <div class="row g-0">
                                        <div class="col-5 card-image">
                                            <img data-src="./images/cars/mercedes-a45-s-amg/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                                        </div>
                                        <div class="col-7">
                                            <div class="card-body">
                                                <h3 class="card-title text-truncate mb-0" title="Mercedes A45 S AMG">
                                                    <a href="car-details.html" class="fw-bold fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedes A45 S AMG</a>
                                                </h3>
                                                <p class="card-text mb-2">
                                                    <span class="car-price text-primary fs-special fs-sm fw-bold custom-color">$39,458</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Car -->


                        </div>

                        <a href="compare.html" class="btn btn-link card-link link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View comparison table</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger error modal -->
        <span id="error-modal-trigger" class="d-none" data-bs-toggle="modal" data-bs-target="#errorModal"></span>

        <!-- Error Modal -->
        <div class="modal fade" id="errorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-secondary-subtle py-2">
                        <button type="button" class="btn-close rounded-circle z-1" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>


    </main>
    <!-- END Main -->

    <!-- Footer -->
    <!-- Footer Style 1 -->
    <footer class="footer-style-1 position-relative border-top border-opacity-10 bg-dark text-bg-dark p-5">

        <div class="container py-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6 mb-sm-0 mb-5 order-lg-0 order-2">
                    <div class="d-flex flex-column h-100">
                        <div class="logo mb-4">
                            <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-decoration-none" href="index.html">
                                <img class="logo-light" src="images/logo-light.png" alt="CARMART">
                            </a>
                        </div>
                        <p class="mb-4">Buy and drive your dream car from the most trusted automotive specialists.</p>
                        <p class="fw-bold fs-special mt-auto">
                            &copy; 2024. All Rights Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 ps-lg-5 order-lg-1 order-0">
                    <h4 class="fs-6 text-uppercase fw-bold mb-3">Information</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="index.html">Home</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="about.html">About Us</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="blog-grid-3-cols.html">Blog</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="careers.html">Careers</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="terms-of-service.html">Terms of Service</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="privacy-policy.html">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 ps-lg-5 order-lg-2 order-1">
                    <h4 class="fs-6 text-uppercase fw-bold mb-3">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="car-filter-grid.html">Inventory</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="cars-sold.html">Sold</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="reviews.html">Reviews</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="faqs.html">FAQs</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="testimonials.html">Testimonials</a>
                        </li>
                        <li class="mb-2">
                            <a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="contact.html">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 mb-lg-0 order-lg-3 order-3">
                    <h4 class="fs-6 text-uppercase fw-bold mb-3">Subscribe</h4>
                    <!-- Newsletter Widget  -->
                    <div class="footer-widget newsletter-widget mb-4">
                        <h3 class="footer-widget-title fs-6 text-uppercase mb-3 d-none">Newsletter</h3>
                        <div class="footer-widget-body">
                            <p class="">Subscribe to our newsletter to receive exclusive updates and offers.</p>
                            <form id="newsletter-subscribe-footer-widget">
                                <div class="input-group">
                                    <input type="email" class="form-control custom-color" placeholder="Enter your email" aria-label="Subscribe to our Newsletter" aria-describedby="button-newsletter-subscribe">
                                    <button class="btn btn-outline-secondary rounded-end  custom-color color-override" type="button" id="button-newsletter-subscribe">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5"></path>
                                            <path d="M16 19h6"></path>
                                            <path d="M19 16v6"></path>
                                            <path d="M3 7l9 6l9 -6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Newsletter Widget  -->
                    <div class="social-media-icons">
                        <ul class="list-unstyled d-flex justify-content-start m-0">
                            <li class="mb-2 me-2">
                                <a class="facebook link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"></a>
                            </li>
                            <li class="mb-2 me-2">
                                <a class="x link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"></a>
                            </li>
                            <li class="mb-2 me-2">
                                <a class="instagram link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"></a>
                            </li>
                            <li class="mb-2 me-2">
                                <a class="whatsapp link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"></a>
                            </li>
                            <li class="mb-2 me-2">
                                <a class="telegram link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- END Footer Style 1 -->

    <!-- This is for smoothening the edges -->
    <div class="overflow-hidden collapsing">
        <svg width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="smoothener-std-dev-2">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                </filter>
            </defs>
        </svg>
    </div>
    <!-- END Footer -->

    <!-- Scripts -->

    <!-- jQuery -->
    <script src="libs/jquery/dist/jquery.min.js"></script>


    <!-- Owl Carousel plugin -->
    <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>


    <!-- Magnific Popup plugin -->
    <script src="libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>




    <!-- Judo Spin plugin -->
    <script src="libs/judo-spin/dist/js/judo-spin.min.js"></script>



    <!-- Plyr plugin -->
    <script src="libs/plyr/dist/plyr.min.js"></script>


    <!-- jQuery Lazy plugin -->
    <script src="libs/jquery-lazy/jquery.lazy.min.js"></script>

    <!-- Simplebar plugin -->
    <script src="libs/simplebar/dist/simplebar.min.js"></script>

    <!-- Bootstrap bundle -->
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jarallax plugin -->
    <script src="libs/jarallax/dist/jarallax.min.js"></script>
    <script src="libs/jarallax/dist/jarallax-video.min.js"></script>

    <!-- FlyTo plugin -->
    <script src="libs/fly-to/dist/js/fly-to.min.js"></script>

    <!-- Main JavaScript -->
    <script src="js/script.min.js"></script>


    <script src="switcher/switcher.min.js"></script>

    <!-- END Scripts -->
</body>


<!-- Mirrored from www.themecrest.top/templates/carmart/demo/car-details-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jun 2025 16:46:33 GMT -->

</html>