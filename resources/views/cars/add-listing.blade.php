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
                                <a class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color" href="/" aria-expanded="false">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/vehicles" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Vehicles</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">New</a>
                            </li> -->
                            <li class="nav-item">
                                <a href="#" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Sold</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Contact</a>
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
                <h3 class="h3 mb-3 mb-lg-0">Add Listing</h3>
            </div>

        </div>
    </div>
    <!-- END Breadcrumb Style 1 -->







    <!-- END Breadcrumb -->

    <!-- Main -->
    <main>








        <div class="container py-5 mb-md-4">
            <div class="row">

                <!-- Content -->
                <section class="col-12">

                    <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-12 g-4">

                        <!-- Add Listing -->
                        <form id="add-listing-form" class="w-100 submit-listing-form" action="#">

                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="accordion mb-4" id="listing-details-accordion">
                                                <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button bg-light-subtle custom-color fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#listing-details" aria-expanded="true" aria-controls="listing-details">
                                                            Listing Details
                                                        </button>
                                                    </h2>
                                                    <div id="listing-details" class="accordion-collapse collapse show" data-bs-parent="#listing-details-accordion">
                                                        <div class="accordion-body">
                                                            <div class="row row-cols-sm-2 row-cols-md-3">



                                                                <!-- Listing manufacturer -->
                                                                <div class="mb-3">
                                                                    <label for="listing-manufacturer" class="form-label fw-semibold fs-special mb-1">Manufacturer</label>
                                                                    <select id="listing-manufacturer" name="listing-manufacturer" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select manufacturer">
                                                                        <option selected>Select</option>

                                                                        <option value="Audi">Audi</option>

                                                                        <option value="BMW">BMW</option>

                                                                        <option value="Chevrolet">Chevrolet</option>

                                                                        <option value="Fiat">Fiat</option>

                                                                        <option value="Ford">Ford</option>

                                                                        <option value="GMC">GMC</option>

                                                                        <option value="Honda">Honda</option>

                                                                        <option value="Hyundai">Hyundai</option>

                                                                        <option value="Jaguar">Jaguar</option>

                                                                        <option value="Jeep">Jeep</option>

                                                                        <option value="Kia">Kia</option>

                                                                        <option value="Land Rover">Land Rover</option>

                                                                        <option value="Lexus">Lexus</option>

                                                                        <option value="Mercedes-Benz">Mercedes-Benz</option>

                                                                        <option value="MG">MG</option>

                                                                        <option value="Mini Cooper">Mini Cooper</option>

                                                                        <option value="Mitsubishi">Mitsubishi</option>

                                                                        <option value="Nissan">Nissan</option>

                                                                        <option value="Renault">Renault</option>

                                                                        <option value="Skoda">Skoda</option>

                                                                        <option value="Suzuki">Suzuki</option>

                                                                        <option value="Tata">Tata</option>

                                                                        <option value="Toyota">Toyota</option>

                                                                        <option value="Volkswagen">Volkswagen</option>

                                                                        <option value="Volvo">Volvo</option>

                                                                    </select>
                                                                </div>
                                                                <!-- END Listing manufacturer -->





                                                                <!-- Listing model -->
                                                                <div class="mb-3">
                                                                    <label for="listing-model" class="form-label fw-semibold fs-special mb-1">Model</label>
                                                                    <select id="listing-model" name="listing-model" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select model">
                                                                        <option selected>Select</option>



                                                                    </select>
                                                                </div>
                                                                <!-- END Listing model -->





                                                                <!-- Listing series -->
                                                                <div class="mb-3">
                                                                    <label for="listing-series" class="form-label fw-semibold fs-special mb-1">Series</label>
                                                                    <select id="listing-series" name="listing-series" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select series">
                                                                        <option selected>Select</option>







                                                                    </select>
                                                                </div>
                                                                <!-- END Listing series -->





                                                                <!-- Listing body -->
                                                                <div class="mb-3">
                                                                    <label for="listing-body" class="form-label fw-semibold fs-special mb-1">Body</label>
                                                                    <select id="listing-body" name="listing-body" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select body">
                                                                        <option selected>Select</option>


                                                                        <option value="4x4">4x4</option>

                                                                        <option value="convertible">Convertible</option>

                                                                        <option value="coupe">Coupe</option>

                                                                        <option value="hatchback">Hatchback</option>

                                                                        <option value="camper">MPV</option>

                                                                        <option value="sedan">Sedan</option>

                                                                        <option value="sports">Sports</option>

                                                                        <option value="suv">SUV</option>

                                                                        <option value="mpv">MPV</option>

                                                                    </select>
                                                                </div>
                                                                <!-- END Listing body -->





                                                                <!-- Listing transmission -->
                                                                <div class="mb-3">
                                                                    <label for="listing-transmission" class="form-label fw-semibold fs-special mb-1">Transmission</label>
                                                                    <select id="listing-transmission" name="listing-transmission" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select transmission">
                                                                        <option selected>Select</option>


                                                                        <option value="automatic">Automatic</option>

                                                                        <option value="semi-auto">Semi Auto</option>

                                                                        <option value="manual">Manual</option>


                                                                    </select>
                                                                </div>
                                                                <!-- END Listing transmission -->





                                                                <!-- Listing fuel -->
                                                                <div class="mb-3">
                                                                    <label for="listing-fuel" class="form-label fw-semibold fs-special mb-1">Fuel</label>
                                                                    <select id="listing-fuel" name="listing-fuel" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select fuel">
                                                                        <option selected>Select</option>

                                                                        <option value="petrol">Petrol</option>

                                                                        <option value="diesel">Diesel</option>

                                                                        <option value="hybrid-electric">Hybrid Electric</option>

                                                                        <option value="hybrid-petrol-el">Hybrid Petrol/EL</option>

                                                                        <option value="petrol-mhev">Petrol/MHEV</option>

                                                                        <option value="diesel-mhev">Diesel/MHEV</option>


                                                                    </select>
                                                                </div>
                                                                <!-- END Listing fuel -->





                                                                <!-- Listing engine -->
                                                                <div class="mb-3">
                                                                    <label for="listing-engine" class="form-label fw-semibold fs-special mb-1">Engine</label>
                                                                    <select id="listing-engine" name="listing-engine" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select engine">
                                                                        <option selected>Select</option>


                                                                        <option value="1">0 - 1L</option>

                                                                        <option value="2">1L - 2L</option>

                                                                        <option value="3">2L - 3L</option>

                                                                        <option value="4">3L - 4L</option>

                                                                        <option value="5">4L - 5L</option>

                                                                        <option value="6">5L+</option>




                                                                    </select>
                                                                </div>
                                                                <!-- END Listing engine -->


                                                                <!-- Listing doors -->
                                                                <div class="mb-3">
                                                                    <label for="listing-doors" class="form-label fw-semibold fs-special mb-1">Doors</label>
                                                                    <select id="listing-doors" name="listing-doors" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select doors">
                                                                        <option selected>Select</option>



                                                                        <option value="2">2 Doors</option>

                                                                        <option value="3">3 Doors</option>

                                                                        <option value="4">4 Doors</option>

                                                                        <option value="5">5 Doors</option>

                                                                        <option value="6">6 Doors</option>



                                                                    </select>
                                                                </div>
                                                                <!-- END Listing doors -->

                                                                <!-- Listing power -->
                                                                <div class="mb-3">
                                                                    <label for="listing-power" class="form-label fw-semibold fs-special mb-1">Power</label>
                                                                    <input type="text" class="form-control custom-color" id="listing-power" name="listing-power">
                                                                </div>
                                                                <!-- END Listing power -->

                                                                <!-- Listing vin -->
                                                                <div class="mb-3">
                                                                    <label for="listing-vin" class="form-label fw-semibold fs-special mb-1">VIN/Chassis Number</label>
                                                                    <input type="text" class="form-control custom-color" id="listing-vin" name="listing-vin">
                                                                </div>
                                                                <!-- END Listing vin -->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="accordion mb-4" id="listing-information-accordion">
                                                <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button bg-light-subtle custom-color fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#listing-information" aria-expanded="true" aria-controls="listing-information">
                                                            Listing Information
                                                        </button>
                                                    </h2>
                                                    <div id="listing-information" class="accordion-collapse collapse show" data-bs-parent="#listing-information-accordion">
                                                        <div class="accordion-body">
                                                            <div class="row row-cols-sm-2 row-cols-md-3">



                                                                <!-- Listing origin -->
                                                                <div class="mb-3">
                                                                    <label for="listing-origin" class="form-label fw-semibold fs-special mb-1">Country of Origin</label>
                                                                    <select id="listing-origin" name="listing-origin" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select country of origin">
                                                                        <option selected>Select</option>





                                                                    </select>
                                                                </div>
                                                                <!-- END Listing origin -->









                                                                <!-- Listing reg-year -->
                                                                <div class="mb-3">
                                                                    <label for="listing-reg-year" class="form-label fw-semibold fs-special mb-1">Registration Year</label>
                                                                    <select id="listing-reg-year" name="listing-reg-year" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select year of registration">
                                                                        <option selected>Select</option>





                                                                    </select>
                                                                </div>
                                                                <!-- END Listing reg-year -->









                                                                <!-- Listing reg-month -->
                                                                <div class="mb-3">
                                                                    <label for="listing-reg-month" class="form-label fw-semibold fs-special mb-1">Registration Month</label>
                                                                    <select id="listing-reg-month" name="listing-reg-month" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select month of registration">
                                                                        <option selected>Select</option>





                                                                    </select>
                                                                </div>
                                                                <!-- END Listing reg-month -->





                                                                <!-- Listing drive-type -->
                                                                <div class="mb-3">
                                                                    <label for="listing-drive-type" class="form-label fw-semibold fs-special mb-1">Drive Type</label>
                                                                    <select id="listing-drive-type" name="listing-drive-type" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select drive type">
                                                                        <option selected>Select</option>


                                                                        <option value="FWD">FWD</option>

                                                                        <option value="RWD">RWD</option>

                                                                        <option value="AWD">AWD</option>

                                                                        <option value="4WD">4WD</option>


                                                                    </select>
                                                                </div>
                                                                <!-- END Listing drive-type -->






                                                                <!-- Listing condition -->
                                                                <div class="mb-3">
                                                                    <label for="listing-condition" class="form-label fw-semibold fs-special mb-1">Condition</label>
                                                                    <select id="listing-condition" name="listing-condition" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select condition">
                                                                        <option selected>Select</option>





                                                                        <option value="New">New</option>

                                                                        <option value="Used">Used</option>



                                                                    </select>
                                                                </div>
                                                                <!-- END Listing condition -->











                                                                <!-- Listing mileage -->
                                                                <div class="mb-3">
                                                                    <label for="listing-mileage" class="form-label fw-semibold fs-special mb-1">Mileage(KM)</label>
                                                                    <input type="text" class="form-control custom-color" id="listing-mileage" name="listing-mileage">
                                                                </div>
                                                                <!-- END Listing mileage -->






                                                                <!-- Listing price -->
                                                                <div class="mb-3">
                                                                    <label for="listing-price" class="form-label fw-semibold fs-special mb-1">Price</label>
                                                                    <input type="text" class="form-control custom-color" id="listing-price" name="listing-price">
                                                                </div>
                                                                <!-- END Listing price -->










                                                                <!-- Listing price-negotiable -->
                                                                <div class="mb-3 d-inline-flex align-items-end">
                                                                    <div class="form-check d-flex align-items-top mb-1">
                                                                        <input class="form-check-input custom-color" type="checkbox" id="listing-price-negotiable" name="listing-price-negotiable">
                                                                        <label class="form-check-label" for="listing-price-negotiable">Price Negotiable</label>
                                                                    </div>
                                                                </div>
                                                                <!-- END Listing price-negotiable -->











                                                                <!-- Listing description -->
                                                                <div class="mb-2 w-100">
                                                                    <label for="listing-description" class="form-label fw-semibold fs-special mb-1">Description</label>
                                                                    <textarea class="form-control custom-color" id="listing-description" name="listing-description" rows="6"></textarea>
                                                                </div>
                                                                <!-- END Listing description -->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="accordion mb-4" id="listing-images-accordion">
                                                <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button bg-light-subtle custom-color fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#listing-images" aria-expanded="true" aria-controls="listing-images">
                                                            Listing Images
                                                        </button>
                                                    </h2>
                                                    <div id="listing-images" class="accordion-collapse collapse show" data-bs-parent="#listing-images-accordion">
                                                        <div class="accordion-body">

                                                            <div class="form-text w-100 mn-2">
                                                                Max file size is 5 MB. We accept PNG, JPG and JPEG.
                                                            </div>

                                                            <div class="row row-cols-auto g-3 justify-content-center py-4 pt-2 my-2">


                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage1" name="uploadImage1" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage1">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage2" name="uploadImage2" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage2">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage3" name="uploadImage3" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage3">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage4" name="uploadImage4" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage4">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage5" name="uploadImage5" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage5">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage6" name="uploadImage6" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage6">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage7" name="uploadImage7" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage7">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage8" name="uploadImage8" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage8">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage9" name="uploadImage9" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage9">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage10" name="uploadImage10" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage10">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage11" name="uploadImage11" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage11">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage12" name="uploadImage12" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage12">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage13" name="uploadImage13" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage13">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage14" name="uploadImage14" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage14">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-dark-emphasis">
                                                                    <div class="image-upload d-flex flex-column justify-content-center align-items-center position-relative bg-body-tertiary rounded border border-2">
                                                                        <input class="form-control custom-color" type="file" id="uploadImage15" name="uploadImage15" accept="image/*">
                                                                        <span class="upload-icon"></span>
                                                                        <span class="upload-text fs-xs fs-special text-uppercase mx-3 text-center mt-2">Upload Photo</span>
                                                                        <div id="previewImage15">
                                                                            <span class="remove-upload rounded-circle" role="button"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="accordion mb-4" id="listing-360-view-accordion">
                                                <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button bg-light-subtle custom-color fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#listing-360-view" aria-expanded="true" aria-controls="listing-360-view">
                                                            Listing 360 View Images
                                                        </button>
                                                    </h2>
                                                    <div id="listing-360-view" class="accordion-collapse collapse show" data-bs-parent="#listing-360-view-accordion">
                                                        <div class="accordion-body">

                                                            <div class="form-text w-100 mn-2">
                                                                Max file size is 5 MB. We accept PNG, JPG and JPEG.
                                                            </div>

                                                            <div class="row row-cols-auto g-3 justify-content-center py-4 pt-2 my-2 mb-0 pb-0">

                                                                <div class="upload-container-360 w-100 custom-color">
                                                                    <div id="drag-drop-area-360" class="drag-drop-area-360 bg-body-tertiary rounded border border-2 cursor-pointer text-secondary p-5 fs-6">
                                                                        <p class="m-0">Drag and drop images here or click to select files</p>
                                                                        <input class="d-none" type="file" id="file-input" name="images-360" multiple accept="image/*">
                                                                    </div>
                                                                    <div id="gallery-360" class="gallery-360 d-flex flex-wrap justify-content-center position-relative gap-2 p-4"></div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="container p-0">
                                                <div class="d-flex align-items-center row row-cols-1 row-cols-lg-2 g-0 gy-4 gy-lg-0">
                                                    <div class="m-0">


                                                    </div>
                                                    <div class="text-lg-end">
                                                        <a href="add-listing-payment.html" role="button" class="btn btn-lg btn-primary custom-color fs-6 px-4 py-3 text-uppercase fw-bold text-spacing-md d-inline-flex align-content-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy me-3">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                                <path d="M14 4l0 4l-6 0l0 -4" />
                                                            </svg>Save and Continue
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="bg-body-tertiary px-3 rounded sticky-top">
                                        <div class="submit-listing-nav">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="text-decoration-none text-truncate" href="javascript:void(0)">
                                                        Listing Details
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <circle fill="none" stroke-width="3" cx="20" cy="15" r="11" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="text-decoration-none text-truncate" href="javascript:void(0)">
                                                        Information
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <circle fill="none" stroke-width="3" cx="20" cy="15" r="11" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
                                                        </svg>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="text-decoration-none text-truncate" href="javascript:void(0)">
                                                        Images
                                                        <svg x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                                                            <circle fill="none" stroke-width="3" cx="20" cy="15" r="11" stroke-dasharray="100 100" stroke-dashoffset="100" transform="rotate(-90 18 18)"></circle>
                                                        </svg>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- END Add Listing -->

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


<!-- Mirrored from www.themecrest.top/templates/carmart/demo/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Jun 2025 16:46:06 GMT -->

</html>