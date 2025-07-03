<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themecrest.top/templates/carmart/demo/account-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jun 2025 16:45:33 GMT -->

<head>

    <script src="js/color-modes.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Listings</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Owl Carousel stylesheet -->
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.default.min.css">




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
                                <a href="/" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Home</a>
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
                                <a href="#" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Pages</a>
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
                <div class="header-login rounded-circle">
                    <a href="/login" class="btn btn-sm position-relative btn-light border rounded-circle ms-2 fs-xs" role="button">
                        <i class="bi bi-person"></i> <!-- Bootstrap Icon (person) -->
                        <span class="visually-hidden">Login</span>
                    </a>
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

            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h3 class="h3 mb-3 mb-lg-0">My Listings</h3>
            </div>


        </div>
    </div>
    <!-- END Breadcrumb Style 1 -->







    <!-- END Header -->

    <!-- Main -->
    <main>










































































































































































        <div class="container py-5 mb-md-4">
            <div class="row">

                <!-- Content -->
                <section class="col-12">

                    <div class="row">
                        <div class="col-12">

                            <div class="card border mb-4 overflow-hidden">

                                <div class="card-header p-3 border-bottom d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center bg-body">
                                    <h5 class="card-title mb-3 m-sm-0">My Listings <span class="badge bg-primary bg-opacity-10 text-primary ms-2">15 Items</span>
                                    </h5>
                                    <a href="/add-listing" role="button" class="btn btn-warning fs-sm fw-bold d-flex align-items-center text-uppercase me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus me-1">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 5l0 14" />
                                            <path d="M5 12l14 0" />
                                        </svg>Add Listing
                                    </a>
                                </div>

                                <div class="card-body p-0">



                                    <div class="account-listings table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-shrink">

                                            <thead class="bg-body-tertiary text-uppercase fs-sm border-top border-bottom">
                                                <tr>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Image</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Details</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Price</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Created</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Status</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Views</th>
                                                    <th scope="col" class="border-0 bg-transparent text-body-secondary ps-3">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody class="border-top-0">



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/bmw-x5/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">BMW X5</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$95,895</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">5478</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/volkswagen-tiguan/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Volkswagen Tiguan</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$225,125</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">3785</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/mercedes-g63-amg/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedes G63 AMG</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$49,675</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">1478</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/land-rover-defender/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Land Rover Defender</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$85,985</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                      
                                      
                                      
                                       status-draft 
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Draft</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">2</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/mercedes-a45-s-amg/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedes A45 S AMG</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$39,458</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">3671</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/mercedes-benz-gle/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedez Benz GLE</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$89,759</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                      
                                       status-pending 
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Pending</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">0</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/audi-r8/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Audi RS</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$65,495</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">6547</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/mini-cooper/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mini Cooper</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$38,965</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                      
                                      
                                      
                                      
                                       status-sold 
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Sold</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">6157</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/suzuki-sx4/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Suzuki SX4</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$29,999</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">4139</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/peugeot-407/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Peugeout 407</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$45,000</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                      
                                      
                                       status-cancelled 
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Cancelled</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">3478</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/toyota-camry/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Toyota Camry</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$25,500</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                       status-published 
                                      
                                      
                                      
                                      
                                      
                                      "></span>
                                                            <span class="text-body-secondary">Published</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">5478</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                                <!-- Listing Item -->
                                                <tr>
                                                    <td>
                                                        <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                            <a href="car-details.html">
                                                                <img class="img-fluid lazy" data-src="./images/cars/mercedes-gt-r-amg/01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h6 class="m-0">
                                                            <a href="car-details.html" class="fs-6 text-decoration-none link-body-emphasis link-opacity-75 link-opacity-50-hover">Mercedes-Benz GT R AMG</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">$35,999</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">Jul 24, 2023</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center listing-status">
                                                            <span class="badge bg-success me-2
                                      
                                      
                                      
                                      
                                      
                                       status-archived 
                                      "></span>
                                                            <span class="text-body-secondary">Archived</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-body-secondary">9872</span>
                                                    </td>
                                                    <td>
                                                        <div class="action">
                                                            <a href="car-details.html" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                            <a href="edit-listing.html" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                            <a href="javascript:void(0)" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Delete"></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- END Listing Item -->



                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>

                            <nav aria-label="Content navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item custom-color me-auto">
                                        <a class="page-link page-prev border-0 p-0 bg-transparent" href="javascript:void()" aria-label="Previous">
                                            <span class="d-flex align-items-center" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M15 6l-6 6l6 6"></path>
                                                </svg>
                                            </span>
                                            <span class="arrow-edge"></span>
                                        </a>
                                    </li>
                                    <li class="page-item custom-color">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                    <li class="page-item custom-color">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item custom-color">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item custom-color ms-auto">
                                        <a class="page-link page-next border-0 p-0 bg-transparent" href="#" aria-label="Next">
                                            <span class="d-flex align-items-center" aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M9 6l6 6l-6 6"></path>
                                                </svg>
                                            </span>
                                            <span class="arrow-edge"></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </section>
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






    <!-- Apex Charts plugin -->
    <script src="libs/apexcharts/dist/apexcharts.min.js"></script>



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


<!-- Mirrored from www.themecrest.top/templates/carmart/demo/account-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jun 2025 16:45:35 GMT -->

</html>