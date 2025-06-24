<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">

    <!-- Load Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">

    {{-- <!-- Owl Carousel stylesheet --> change  --}}
    <link rel="stylesheet" href="/libs/owl.carousel/dist/assets/owl.carousel.min.css">                   
    <link rel="stylesheet" href="/libs/owl.carousel/dist/assets/owl.theme.default.min.css">

    {{-- <!-- Simplebar stylesheet --> change  --}}
    <link rel="stylesheet" href="/libs/simplebar/dist/simplebar.min.css">
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
    <link rel="stylesheet" href="/libs/jarallax/dist/jarallax.min.css">

    <!-- Site stylesheet -->
    <link rel="stylesheet" href="/css/style.min.css">

    <!-- Color scheme -->
    <link id="templateColorScheme" rel="stylesheet" href="/css/color-schemes/tc_red.css">

    <!-- Preloader stylesheet -->
    <link rel="stylesheet" href="/css/preloader.css">

    <!-- Preloader JavaScript -->
    <script src="/js/preloader.js"></script>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReadyDrive</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0a0a0a;
            color: white;
            overflow-x: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 4rem;
            position: relative;
            z-index: 10;
        }

        nav a {
            margin-left: 2rem;
            color: #bbb;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a.active,
        nav a:hover {
            color: #f00;
        }

        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            /* background: url("{{ asset('storage/images/car-hero2.jpg') }}") no-repeat center center/cover; */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 2rem;
            padding-top: 12px;
            justify-content: flex-start;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: white;
        }

        .hero p {
            font-size: 1rem;
            color: #ddd;
            margin-top: 1rem;
            max-width: 600px;
        }

        .carousel-caption .btn {
            margin-top: 2rem;
            background-color: transparent;
            border: 2px solid #f00;
            color: #f00;
            padding: 0.75rem 2rem;
            border-radius: 999px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-caption {
            bottom: 10.25rem !important;
        }

        .carousel-caption .btn:hover {

            background-color: #f00;
            color: white;
        }

        .hero .btn {
            margin-top: 2rem;
            background-color: transparent;
            border: 2px solid #f00;
            color: #f00;
            padding: 0.75rem 2rem;
            border-radius: 999px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .hero .btn:hover {
            background-color: #f00;
            color: white;
        }

        .scroll-indicator {
            margin-top: 3rem;
            font-size: 2rem;
            color: #eee;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(10px);
            }
        }
    </style>
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

  {{-- CAUTION put this section in layout  --}}
  <header class="z-1030 position-relative z-2 shadow-sm">

    <!-- Top Bar - Style 1 -->
    
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




  <!-- Main -->
  <main>

    <!-- Hero Filter -->
    <section class="position-relative custom-color">

      <div class="jarallax" data-jarallax data-speed="0.2">

        <img class="jarallax-img lazy" data-src="./images/cars/hero-01.jpg" alt="">


        <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.42) 0px, rgba(255, 255, 255, 0.08) 67%); opacity: "></span>

        <div class="container position-relative col-xxl-8 py-5">
          <div class="row g-0 align-items-start">
            <div class="col-lg-4 bg-blur bg-dark bg-opacity-25 border border-light border-opacity-25 rounded-3 p-4 my-3 my-md-5 text-white">
              <form id="hero-filter" class="row">
                <div class="col-12 mb-3 d-grid">
                  <div class="btn-group bg-white bg-opacity-25 text-white" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btn_any" autocomplete="off" checked>
                    <label class="btn btn-outline-success custom-color border bg-body-tertiary text-body" for="btn_any">Any</label>
                    <input type="radio" class="btn-check" name="btnradio" id="btn_new" autocomplete="off">
                    <label class="btn btn-outline-success custom-color border bg-body-tertiary text-body" for="btn_new">New</label>
                    <input type="radio" class="btn-check" name="btnradio" id="btn_used" autocomplete="off">
                    <label class="btn btn-outline-success custom-color border bg-body-tertiary text-body" for="btn_used">Used</label>
                  </div>
                </div>
                <div class="col-12 mb-3 d-none">
                  <label for="auto-keyword" class="form-label text-uppercase fs-sm fw-bold">Keyword</label>
                  <input type="text" class="form-control bg-white bg-opacity-25 border-light border-opacity-50" id="auto-keyword" name="auto-keyword">
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="brand-select" class="form-label text-uppercase fs-sm fw-bold">Brand</label>
                  <select id="brand-select" name="brand-select" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select auto brand">
                    <option selected>Any</option>

                    <option value="Abarth">Abarth</option>

                    <option value="Acura">Acura</option>

                    <option value="Alfa Romeo">Alfa Romeo</option>

                    <option value="Alpina">Alpina</option>

                    <option value="Aston Martin">Aston Martin</option>

                    <option value="Audi">Audi</option>

                    <option value="Baojun">Baojun</option>

                    <option value="Bentley">Bentley</option>

                    <option value="Bertone">Bertone</option>

                    <option value="BMW">BMW</option>

                    <option value="Borgward">Borgward</option>

                    <option value="Bugatti">Bugatti</option>

                    <option value="Buick">Buick</option>

                    <option value="BYD">BYD</option>

                    <option value="Cadillac">Cadillac</option>

                    <option value="Changan">Changan</option>

                    <option value="Chevrolet">Chevrolet</option>

                    <option value="Chrysler">Chrysler</option>

                    <option value="Citroen">Citroen</option>

                    <option value="Corvette">Corvette</option>

                    <option value="Cupra">Cupra</option>

                    <option value="Dacia">Dacia</option>

                    <option value="Daewoo">Daewoo</option>

                    <option value="Dodge">Dodge</option>

                    <option value="Faw">Faw</option>

                    <option value="DS">DS</option>

                    <option value="Ferrari">Ferrari</option>

                    <option value="Fiat">Fiat</option>

                    <option value="Ford">Ford</option>

                    <option value="GAC Motor">GAC Motor</option>

                    <option value="Genesis">Genesis</option>

                    <option value="Gillet">Gillet</option>

                    <option value="GMC">GMC</option>

                    <option value="Honda">Honda</option>

                    <option value="Hyundai">Hyundai</option>

                    <option value="Infiniti">Infiniti</option>

                    <option value="Iveco">Iveco</option>

                    <option value="Jaguar">Jaguar</option>

                    <option value="Jeep">Jeep</option>

                    <option value="Kia">Kia</option>

                    <option value="Koenigsegg">Koenigsegg</option>

                    <option value="Lamborghini">Lamborghini</option>

                    <option value="Lancia">Lancia</option>

                    <option value="Land Rover">Land Rover</option>

                    <option value="Lexus">Lexus</option>

                    <option value="Lincoln">Lincoln</option>

                    <option value="Lotus">Lotus</option>

                    <option value="Luxgen">Luxgen</option>

                    <option value="Maserati">Maserati</option>

                    <option value="Maybach">Maybach</option>

                    <option value="Mazda">Mazda</option>

                    <option value="McLaren">McLaren</option>

                    <option value="Mercedes-Benz">Mercedes-Benz</option>

                    <option value="Mercury">Mercury</option>

                    <option value="MG">MG</option>

                    <option value="MINI">MINI</option>

                    <option value="Mini Cooper">Mini Cooper</option>

                    <option value="Mitsubishi">Mitsubishi</option>

                    <option value="Nissan">Nissan</option>

                    <option value="OldMobile">OldMobile</option>

                    <option value="Opel">Opel</option>

                    <option value="Peterbilt">Peterbilt</option>

                    <option value="Pontiac">Pontiac</option>

                    <option value="Peugeot">Peugeot</option>

                    <option value="Porsche">Porsche</option>

                    <option value="Qoros">Qoros</option>

                    <option value="Renault">Renault</option>

                    <option value="Roewe">Roewe</option>

                    <option value="Rolls Royce">Rolls Royce</option>

                    <option value="Saab">Saab</option>

                    <option value="Saic Motor">Saic Motor</option>

                    <option value="Seat">Seat</option>

                    <option value="Skoda">Skoda</option>

                    <option value="Subaru">Subaru</option>

                    <option value="Suzuki">Suzuki</option>

                    <option value="Tata">Tata</option>

                    <option value="Tesla">Tesla</option>

                    <option value="Toyota">Toyota</option>

                    <option value="Vauxhall">Vauxhall</option>

                    <option value="Volkswagen">Volkswagen</option>

                    <option value="Volvo">Volvo</option>

                    <option value="Wiesmann">Wiesmann</option>

                    <option value="Wuling">Wuling</option>

                  </select>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="model-select" class="form-label text-uppercase fs-sm fw-bold">Model</label>
                  <select id="model-select" name="model-select" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select brand model">
                    <option selected>Any</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="min-price-filter" class="form-label text-uppercase fs-sm fw-bold">Min Price</label>
                  <select id="min-price-filter" name="min-price-filter" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select min price">
                    <option selected>Any</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="max-price-filter" class="form-label text-uppercase fs-sm fw-bold">Max Price</label>
                  <select id="max-price-filter" name="max-price-filter" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select maximum price">
                    <option selected>Any</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="min-year-filter" class="form-label text-uppercase fs-sm fw-bold">Year (From)</label>
                  <select id="min-year-filter" name="min-year-filter" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select auto's minimum year">
                    <option selected>Any</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 mb-3">
                  <label for="max-year-filter" class="form-label text-uppercase fs-sm fw-bold">Year (To)</label>
                  <select id="max-year-filter" name="max-year-filter" class="form-select custom-color  bg-white bg-opacity-25 border-light border-opacity-50" aria-label="Select auto's maximum year">
                    <option selected>Any</option>
                  </select>
                </div>
                <div class="col-12 mt-2 d-grid">
                  <button type="submit" class="btn btn-warning text-spacing-md text-uppercase fw-bold">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      </div>

    </section>
    <!-- END Hero Filter -->

    <!-- Browse by brand logo -->
    <section class="position-relative custom-color
            
            ">


      <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: var(--bs-primary); background-image: ; opacity: 0.04"></span>

      <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
        <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Browse by Brand</h2>
        <div class="browse-brands-carousel owl-carousel owl-theme" data-loop="false" data-nav="true" data-dots="true" data-autoplay="false">



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Abarth</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/abarth.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Acura</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/acura.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Alfa Romeo</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/alfa-romeo.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Alpina</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/alpina.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Aston Martin</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/aston-martin.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>15</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Audi</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/audi.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Baojun</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/baojun.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Bentley</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/bentley.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>7</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Bertone</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/bertone.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>6</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">BMW</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/bmw.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>12</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Borgward</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/borgward.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Bugatti</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/bugatti.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>1</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Buick</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/buick.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">BYD</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/byd.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>7</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Cadillac</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/cadillac.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Changan</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/changan.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>4</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Chevrolet</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/chevrolet.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>19</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Chrysler</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/chrysler.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>4</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Citroen</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/citroen.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>10</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Corvette</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/corvette.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Cupra</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/cupra.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Dacia</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/dacia.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Daewoo</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/daewoo.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>6</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Dodge</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/dodge.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Faw</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/faw.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">DS</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/ds.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Ferrari</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/ferrari.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>9</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Fiat</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/fiat.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Ford</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/ford.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>11</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">GAC Motor</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/gac-motor.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Genesis</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/genesis.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>1</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Gillet</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/gillet.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">GMC</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/gmc.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>16</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Honda</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/honda.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Hyundai</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/hyundai.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>13</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Infiniti</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/infiniti.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>20</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Iveco</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/iveco.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>4</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Jaguar</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/jaguar.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>17</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Jeep</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/jeep.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>14</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Kia</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/kia.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>0</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Koenigsegg</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/koenigsegg.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Lamborghini</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/lamborghini.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>18</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Lancia</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/lancia.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Land Rover</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/landrover.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>6</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Lexus</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/lexus.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>15</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Lincoln</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/lincoln.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Lotus</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/lotus.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Luxgen</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/luxgen.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Maserati</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/maserati.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>3</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Maybach</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/maybach.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>4</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Mazda</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mazda.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>9</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">McLaren</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mclaren.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>17</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Mercedes-Benz</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mercedes-benz.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>8</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Mercury</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mercury.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">MG</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mg.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>1</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">MINI</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mini.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Mini Cooper</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mini-cooper.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Mitsubishi</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/mitsubishi.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>11</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Nissan</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/nissan.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>13</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">OldMobile</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/oldmobile.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>5</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Opel</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/opel.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>4</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Peterbilt</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/peterbilt.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>16</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Pontiac</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/pontiac.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>16</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Peugeot</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/peugeot.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>16</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Porsche</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/porsche.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>10</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Qoros</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/qoros.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>1</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Renault</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/renault.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>1</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Roewe</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/roewe.png)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Rolls Royce</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/abarth.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>19</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Saab</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/saab.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Saic Motor</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/saic-motor.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Seat</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/seat.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Skoda</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/skoda.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Subaru</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/subaru.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Suzuki</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/suzuki.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>7</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Tata</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/tata.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>12</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Tesla</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/tesla.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>12</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Toyota</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/toyota.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>18</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Vauxhall</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/vauxhall.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>14</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Volkswagen</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/volkswagen.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>20</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Volvo</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/volvo.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>15</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Wiesmann</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/wiesmann.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>15</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



          <!-- Brand Item -->
          <div class="item">
            <div class="card border bg-light-subtle border-light-subtle">
              <div class="card-body d-flex flex-column align-items-center">
                <h5 class="card-title fw-bold fs-6 fs-special">Wuling</h5>
                <p class="card-text">
                <div class="car-brand-logo overflow-hidden">
                  <div style="--car-brand-logo: url(../images/brand-logo/wuling.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                </div>
                </p>
              </div>
              <div class="card-footer text-body-secondary text-primary custom-color text-center text-uppercase fs-sm">
                <strong>2</strong> Offers Available
              </div>
            </div>
          </div>
          <!-- END Brand Item -->



        </div>
      </div>

    </section>
    <!-- END Browse by brand logo -->

    <!-- Browse by body type [image] -->
    <section class="position-relative custom-color
            
              bg-body-tertiary
            
            ">

      <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
        <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Browse by Body Type</h2>
        <div class="browse-body-type-image row row-cols-2 row-cols-lg-6 row-cols-md-4 row-cols-sm-3 g-3 mb-3">



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">4x4</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/4x4.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">12</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Convertible</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/convertible.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">8</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Coupe</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/coupe.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">25</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Off-Road</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/off-road.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">17</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Pickup</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/pickup.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">28</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Roadster</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/roadster.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">8</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Saloon</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/saloon.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">16</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Sedan</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/sedan.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">39</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Sports</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/sports.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">5</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Wagon</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/station-wagon.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">19</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">SUV</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/suv.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">24</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



          <!-- Body Type Image -->
          <div class="item">
            <div class="p-1">
              <div class="card body-type-card border-0 shadow-alt-sm">
                <div class="card-body d-flex flex-column align-items-center">
                  <h5 class="card-title fw-bold fs-sm fs-special m-0">Van</h5>
                  <div class="body-type-img overflow-hidden position-relative my-2">
                    <img class="img-fluid img-grayscale-max lazy" data-src="./images/body-types/van.png" alt="">
                  </div>
                  <a href="javascript:void(0)" class="stretched-link"></a>
                  <div class="body-type-count p-1 px-2 bg-secondary-subtle text-secondary fs-xs lh-level fw-bold d-inline-flex align-middle text-center rounded-pill">14</div>
                </div>
              </div>
            </div>
          </div>
          <!-- END Body Type Image -->



        </div>
      </div>

    </section>
    <!-- END Browse by body type [image] -->

    <!-- Recent Cars -->
    <section class="position-relative custom-color
            
            ">


      <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: ; opacity: "></span>

      <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0 position-relative">
        <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Recent Cars</h2>
        <div class="recent-cars-carousel basic-carousel owl-carousel owl-theme" data-loop="false" data-nav="true" data-dots="false" data-autoplay="false">



          <!-- Car -->
          <div class="item">
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
              <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
              <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
              <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
              <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
            <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                  <div>
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                    <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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

    </section>
    <!-- END Recent Cars -->

    <!-- Featured Cars - v3 -->
    <section class="featured-cars-grid featured-cars-v3 position-relative custom-color
            
              bg-body-tertiary
            
            ">

      <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
        <div class="row align-items-start g-4">
          <div class="col-lg-12">
            <h2 class="fs-5 text-uppercase pb-3 mb-0 custom-color ">Featured Cars</h2>
          </div>
          <div class="col-lg-6">
            <div class="card border border-light-subtle mb-4">
              <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">
                <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Sold</span>
              </div>
              <div class="row g-0">
                <div class="col-md-6 card-image">
                  <div id="item11Carousel" class="item-preview carousel slide carousel-fade max-w-h">
                    <div class="carousel-inner rounded-start max-w-h">
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h active">
                        <img data-src="./images/cars/mercedes-gt-r-amg/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/mercedes-gt-r-amg/02.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/mercedes-gt-r-amg/03.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#item11Carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#item11Carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover d-block text-truncate">Mercedes GTR AMG</a>
                    </h3>
                    <p class="card-text">
                      <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$29,999</span>
                    </p>
                    <div class="card-text border-top pt-2 row row-cols-2 g-2">
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
                          14km
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
            </div>
            <div class="card border border-light-subtle mb-4">
              <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">
                <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>
              </div>
              <div class="row g-0">
                <div class="col-md-6 card-image">
                  <div id="item2Carousel" class="item-preview carousel slide carousel-fade max-w-h">
                    <div class="carousel-inner rounded-start max-w-h">
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h active">
                        <img data-src="./images/cars/audi-r8/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/audi-r8/02.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/audi-r8/03.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#item2Carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#item2Carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover d-block text-truncate">Audi R8</a>
                    </h3>
                    <p class="card-text">
                      <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$38,965</span>
                    </p>
                    <div class="card-text border-top pt-2 row row-cols-2 g-2">
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
                          25km
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
                          Grey
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card border border-light-subtle mb-4">
              <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">
                <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Sold</span>
              </div>
              <div class="row g-0">
                <div class="col-md-6 card-image">
                  <div id="item3Carousel" class="item-preview carousel slide carousel-fade max-w-h">
                    <div class="carousel-inner rounded-start max-w-h">
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h active">
                        <img data-src="./images/cars/toyota-camry/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/toyota-camry/02.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/toyota-camry/03.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#item3Carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#item3Carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover d-block text-truncate">Toyota Camry</a>
                    </h3>
                    <p class="card-text">
                      <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$29,999</span>
                    </p>
                    <div class="card-text border-top pt-2 row row-cols-2 g-2">
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
                          14km
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
            </div>
            <div class="card border border-light-subtle mb-4">
              <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">
                <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>
              </div>
              <div class="row g-0">
                <div class="col-md-6 card-image">
                  <div id="item4Carousel" class="item-preview carousel slide carousel-fade max-w-h">
                    <div class="carousel-inner rounded-start max-w-h">
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h active">
                        <img data-src="./images/cars/mercedes-g63-amg/01.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/mercedes-g63-amg/02.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                      <div class="carousel-item d-flex align-items-center rounded-start max-w-h">
                        <img data-src="./images/cars/mercedes-g63-amg/03.jpg" class="d-block object-fit-cover rounded-start lazy" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#item4Carousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#item4Carousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="car-details.html" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover d-block text-truncate">Mercedes G63 AMG</a>
                    </h3>
                    <p class="card-text">
                      <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$38,965</span>
                    </p>
                    <div class="card-text border-top pt-2 row row-cols-2 g-2">
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
                          25km
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
                          Grey
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- END Featured Cars - v3 -->

    <!-- Counters -->
    <section class="stats-counter border-top border-bottom position-relative custom-color
            
            ">


      <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: ; opacity: "></span>

      <div class="container">
        <div class="row row-cols-lg-4 row-cols-2 g-0 fs-special py-5">

          <div class="d-flex flex-column align-items-center text-center position-relative my-4">
            <span class="fw-semibold fs-3">44,785</span>
            <span class="text-muted text-uppercase">Cars Sold</span>
            <div class="vr h-100 position-absolute end-0 top-0 opacity-15"></div>
          </div>

          <div class="d-flex flex-column align-items-center text-center position-relative my-4">
            <span class="fw-semibold fs-3">39,687</span>
            <span class="text-muted text-uppercase">Happy Customers</span>
            <div class="vr h-100 position-absolute end-0 top-0 opacity-15 d-none d-lg-block"></div>
          </div>

          <div class="d-flex flex-column align-items-center text-center position-relative my-4">
            <span class="fw-semibold fs-3">32,650</span>
            <span class="text-muted text-uppercase">Positive Reviews</span>
            <div class="vr h-100 position-absolute end-0 top-0 opacity-15"></div>
          </div>

          <div class="d-flex flex-column align-items-center text-center position-relative my-4">
            <span class="fw-semibold fs-3">79</span>
            <span class="text-muted text-uppercase">Awards Received</span>
          </div>

        </div>
      </div>

    </section>
    <!-- END Counters -->

    <!-- Careers -->
    <section class="position-relative custom-color
            
              bg-body-tertiary
            
            ">

      <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
        <div class="row info-v2 g-0">

          <div class="col-lg-5 col-md-10 mx-md-auto">
            <!-- Reviews Widget  -->
            <div class="widget reviews-widget reviews-widget-2 p-3 bg-body-tertiary rounded mb-4">
              <h3 class="widget-title fs-6 text-uppercase mb-3">Expert Reviews</h3>
              <div class="widget-body">
                <div class="row g-2">



                  <!-- Review Item -->
                  <div class="col-12">
                    <div class="card review-item text-bg-dark overflow-hidden">
                      <img data-src="./images/cars/audi-r8/01.jpg" class="card-img img-fluid h-100 object-fit-cover lazy" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title review-title fs-6 fw-bold fs-special text-truncate">Audi RS</h5>
                        <p class="card-text review-grade fs-sm fw-bold text-uppercase rounded-1 fs-xs text-spacing-sm d-inline-flex RatingPass">
                          <small>Pass</small>
                        </p>
                        <div class="position-absolute top-0 end-0 me-2 mt-2">
                          <div class="card text-bg-dark mb-3 border-0" style="max-width: 18rem;">
                            <div class="card-header bg-primary custom-color p-0 d-flex align-content-center justify-content-center fs-sm">score</div>
                            <div class="card-body py-2">
                              <p class="card-text review-rating">
                                <strong>69</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                        <a href="review-details.html" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                  <!-- END Review Item -->



                  <!-- Review Item -->
                  <div class="col-12">
                    <div class="card review-item text-bg-dark overflow-hidden">
                      <img data-src="./images/cars/volkswagen-tiguan/01.jpg" class="card-img img-fluid h-100 object-fit-cover lazy" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title review-title fs-6 fw-bold fs-special text-truncate">Volkswagen Tiguan</h5>
                        <p class="card-text review-grade fs-sm fw-bold text-uppercase rounded-1 fs-xs text-spacing-sm d-inline-flex RatingGood">
                          <small>Good</small>
                        </p>
                        <div class="position-absolute top-0 end-0 me-2 mt-2">
                          <div class="card text-bg-dark mb-3 border-0" style="max-width: 18rem;">
                            <div class="card-header bg-primary custom-color p-0 d-flex align-content-center justify-content-center fs-sm">score</div>
                            <div class="card-body py-2">
                              <p class="card-text review-rating">
                                <strong>89</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                        <a href="review-details.html" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                  <!-- END Review Item -->



                  <!-- Review Item -->
                  <div class="col-12">
                    <div class="card review-item text-bg-dark overflow-hidden">
                      <img data-src="./images/cars/peugeot-407/01.jpg" class="card-img img-fluid h-100 object-fit-cover lazy" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title review-title fs-6 fw-bold fs-special text-truncate">Peugeout 407</h5>
                        <p class="card-text review-grade fs-sm fw-bold text-uppercase rounded-1 fs-xs text-spacing-sm d-inline-flex RatingAverage">
                          <small>Average</small>
                        </p>
                        <div class="position-absolute top-0 end-0 me-2 mt-2">
                          <div class="card text-bg-dark mb-3 border-0" style="max-width: 18rem;">
                            <div class="card-header bg-primary custom-color p-0 d-flex align-content-center justify-content-center fs-sm">score</div>
                            <div class="card-body py-2">
                              <p class="card-text review-rating">
                                <strong>50</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                        <a href="review-details.html" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                  <!-- END Review Item -->



                  <!-- Review Item -->
                  <div class="col-12">
                    <div class="card review-item text-bg-dark overflow-hidden">
                      <img data-src="./images/cars/suzuki-sx4/01.jpg" class="card-img img-fluid h-100 object-fit-cover lazy" alt="...">
                      <div class="card-img-overlay">
                        <h5 class="card-title review-title fs-6 fw-bold fs-special text-truncate">Suzuki SX4</h5>
                        <p class="card-text review-grade fs-sm fw-bold text-uppercase rounded-1 fs-xs text-spacing-sm d-inline-flex RatingOutstanding">
                          <small>Outstanding</small>
                        </p>
                        <div class="position-absolute top-0 end-0 me-2 mt-2">
                          <div class="card text-bg-dark mb-3 border-0" style="max-width: 18rem;">
                            <div class="card-header bg-primary custom-color p-0 d-flex align-content-center justify-content-center fs-sm">score</div>
                            <div class="card-body py-2">
                              <p class="card-text review-rating">
                                <strong>95</strong>
                              </p>
                            </div>
                          </div>
                        </div>
                        <a href="review-details.html" class="stretched-link"></a>
                      </div>
                    </div>
                  </div>
                  <!-- END Review Item -->



                </div>
              </div>
            </div>
            <!-- END Reviews Widget  -->
          </div>
          <div class="col-lg-7 col-md-10 mx-md-auto">
            <!-- FAQs Widget  -->
            <div class="widget reviews-widget reviews-widget-2 p-3 bg-body-tertiary rounded mb-4">
              <h3 class="widget-title fs-6 text-uppercase mb-3">Frequently Asked Questions</h3>
              <div class="widget-body">
                <div class="row g-2">

                  <div class="col-12">
                    <div class="accordion" id="faq-1">
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                            What financing options are available for purchasing a car?
                          </button>
                        </h2>
                        <div id="faq11" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            At our dealership, we offer a variety of financing options tailored to meet your needs. We work with trusted lenders to provide competitive rates and flexible terms, ensuring you find the financing solution that works best for you.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="false" aria-controls="faq12">
                            Can I trade in my current vehicle for a new one?
                          </button>
                        </h2>
                        <div id="faq12" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            Absolutely! We accept trade-ins and offer competitive trade-in values. Our team will assess the condition of your vehicle and provide you with a fair appraisal, which can be applied toward the purchase of your new car.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq13" aria-expanded="false" aria-controls="faq13">
                            Can I schedule a test drive before making a purchase?
                          </button>
                        </h2>
                        <div id="faq13" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            Of course! We encourage you to schedule a test drive to experience the vehicle firsthand. You can conveniently schedule a test drive online or contact our sales team, who will be happy to assist you in arranging a time that works for you.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq14" aria-expanded="false" aria-controls="faq14">
                            Do you offer extended warranties on your vehicles?
                          </button>
                        </h2>
                        <div id="faq14" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            Yes, we offer extended warranty options for added peace of mind. Our dealership works with reputable warranty providers to offer comprehensive coverage plans that protect your investment and provide additional support after your purchase.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq15" aria-expanded="false" aria-controls="faq15">
                            What after-sales services do you provide?
                          </button>
                        </h2>
                        <div id="faq15" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            Our commitment to customer satisfaction extends beyond the sale. We offer a range of after-sales services, including routine maintenance, repairs, and genuine OEM parts. Our skilled service technicians and dedicated parts department are here to ensure your vehicle stays in excellent condition throughout its lifespan.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->
                      <!-- FAQ Item -->
                      <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq16" aria-expanded="false" aria-controls="faq16">
                            Are the used cars on your lot thoroughly inspected?
                          </button>
                        </h2>
                        <div id="faq16" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                          <div class="accordion-body">
                            Yes, all our used cars undergo a rigorous inspection process performed by our certified technicians. We ensure that each vehicle meets our high standards of quality, reliability, and safety before it is made available for sale.
                          </div>
                        </div>
                      </div>
                      <!-- END FAQ Item -->

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- END FAQs Widget  -->
          </div>

        </div>
      </div>

    </section>
    <!-- END Careers -->

    <!-- Recent Blog -->
    <section class="position-relative custom-color
            
            ">


      <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: ; opacity: "></span>

      <div class="container blog blog-grid col-xxl-8 py-5 px-3 px-sm-0">
        <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Automotive Blog</h2>
        <div class="row">

          <!-- Blog Article -->
          <div class="col-lg-4 col-md-6">
            <div class="card blog-item overflow-hidden rounded border h-100 bg-body-tertiary">
              <div class="blog-image position-relative overflow-hidden">
                <img data-src="./images/blog/01.jpg" class="card-img-top rounded-top img-fluid h-100 object-fit-cover lazy" alt="...">
                <div class="overlay rounded-top"></div>
              </div>
              <div class="blog-author position-relative d-flex align-items-center align-self-center pe-2 rounded-1 shadow-sm">
                <span class="author-img d-inline-flex align-self-center me-2">
                  <img data-src="./images/team/06.jpg" alt="" class="object-fit-cover img-fluid rounded-start-1 lazy">
                </span>
                <span class="d-block fs-sm text-muted blog-author-name text-truncate">Tom Jones</span>
                <span class="blog-author-sep bg-secondary rounded-circle d-flex align-self-center mx-2"></span>
                <span class="d-block fs-sm text-muted text-uppercase">20<sup>th</sup> Aug 2023</span>
              </div>
              <div class="card-body content pt-0 d-flex flex-column">
                <div class="flex-fill clearfix">
                  <h5 class="m-0">
                    <a href="blog-article-classic-2.html" class="card-title title text-body text-decoration-none fs-6 text-primary custom-color">The Top 10 Luxury Cars of the Last Decade</a>
                  </h5>
                </div>
                <div class="post-meta d-flex justify-content-between mt-3">
                  <ul class="list-unstyled mb-0">
                    <li class="blog-like-count list-inline-item me-2 pe-1 mb-0 text-muted">22</li>
                    <li class="blog-comment-count list-inline-item text-muted">55</li>
                  </ul>
                  <a href="blog-article-classic-2.html" class="text-decoration-none text-muted blog-readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Blog Article --><!-- Blog Article -->
          <div class="col-lg-4 col-md-6">
            <div class="card blog-item overflow-hidden rounded border h-100 bg-body-tertiary">
              <div class="blog-image position-relative overflow-hidden">
                <img data-src="./images/blog/02.jpg" class="card-img-top rounded-top img-fluid h-100 object-fit-cover lazy" alt="...">
                <div class="overlay rounded-top"></div>
              </div>
              <div class="blog-author position-relative d-flex align-items-center align-self-center pe-2 rounded-1 shadow-sm">
                <span class="author-img d-inline-flex align-self-center me-2">
                  <img data-src="./images/team/03.jpg" alt="" class="object-fit-cover img-fluid rounded-start-1 lazy">
                </span>
                <span class="d-block fs-sm text-muted blog-author-name text-truncate">Jennifer Johnson</span>
                <span class="blog-author-sep bg-secondary rounded-circle d-flex align-self-center mx-2"></span>
                <span class="d-block fs-sm text-muted text-uppercase">12<sup>th</sup> Sep 2023</span>
              </div>
              <div class="card-body content pt-0 d-flex flex-column">
                <div class="flex-fill clearfix">
                  <h5 class="m-0">
                    <a href="blog-article-classic-2.html" class="card-title title text-body text-decoration-none fs-6 text-primary custom-color">Electric Cars: Shaping the Future of Automotive Industry</a>
                  </h5>
                </div>
                <div class="post-meta d-flex justify-content-between mt-3">
                  <ul class="list-unstyled mb-0">
                    <li class="blog-like-count list-inline-item me-2 pe-1 mb-0 text-muted">45</li>
                    <li class="blog-comment-count list-inline-item text-muted">32</li>
                  </ul>
                  <a href="blog-article-classic-2.html" class="text-decoration-none text-muted blog-readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Blog Article --><!-- Blog Article -->
          <div class="col-lg-4 col-md-6">
            <div class="card blog-item overflow-hidden rounded border h-100 bg-body-tertiary">
              <div class="blog-image position-relative overflow-hidden">
                <img data-src="./images/blog/03.jpg" class="card-img-top rounded-top img-fluid h-100 object-fit-cover lazy" alt="...">
                <div class="overlay rounded-top"></div>
              </div>
              <div class="blog-author position-relative d-flex align-items-center align-self-center pe-2 rounded-1 shadow-sm">
                <span class="author-img d-inline-flex align-self-center me-2">
                  <img data-src="./images/team/01.jpg" alt="" class="object-fit-cover img-fluid rounded-start-1 lazy">
                </span>
                <span class="d-block fs-sm text-muted blog-author-name text-truncate">David Brown</span>
                <span class="blog-author-sep bg-secondary rounded-circle d-flex align-self-center mx-2"></span>
                <span class="d-block fs-sm text-muted text-uppercase">5<sup>th</sup> Oct 2023</span>
              </div>
              <div class="card-body content pt-0 d-flex flex-column">
                <div class="flex-fill clearfix">
                  <h5 class="m-0">
                    <a href="blog-article-classic-2.html" class="card-title title text-body text-decoration-none fs-6 text-primary custom-color">Exploring Classic Cars: A Journey Through Automotive History</a>
                  </h5>
                </div>
                <div class="post-meta d-flex justify-content-between mt-3">
                  <ul class="list-unstyled mb-0">
                    <li class="blog-like-count list-inline-item me-2 pe-1 mb-0 text-muted">18</li>
                    <li class="blog-comment-count list-inline-item text-muted">12</li>
                  </ul>
                  <a href="blog-article-classic-2.html" class="text-decoration-none text-muted blog-readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!-- END Blog Article -->

        </div>
      </div>

    </section>
    <!-- END Recent Blog -->

    <!-- Our Partners -->
    <section class="position-relative custom-color
            
              bg-body-tertiary
            
            ">

      <div class="container position-relative col-xxl-8 py-5 p-0">
        <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Our Partners</h2>
        <div class="our-partners-carousel owl-carousel owl-theme" data-loop="false" data-nav="true" data-dots="false" data-autoplay="false">

          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/autogreen.svg" alt="Autogreen">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->
          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/firestone.svg" alt="Firestone">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->
          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/michelin.svg" alt="Michelin">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->
          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/bridgestone.svg" alt="BridgeStone">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->
          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/avon.svg" alt="Avon">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->
          <!-- Partner -->
          <div class="item">
            <div class="card border-0">
              <div class="card-body d-flex flex-column align-items-center">
                <p class="card-text">
                  <img class="rounded-1 lazy" data-src="./icons/partners/uniroyal.svg" alt="Uniroyal">
                </p>
              </div>
            </div>
          </div>
          <!-- END Partner -->


        </div>
      </div>

    </section>
    <!-- END Our Partners -->

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

  {{-- CAUTION put this section in the layout  --}}
  <footer class="footer-style-1 position-relative border-top border-opacity-10 bg-dark text-bg-dark p-5">

    <div class="container py-3">
      <div class="row">
        <div class="col-lg-3 col-sm-6 mb-sm-0 mb-5 order-lg-0 order-2">
          <div class="d-flex flex-column h-100">
            <div class="logo mb-4">
              <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-decoration-none" href="index.html">
                <img class="logo-light" src="/images/logo-light.png" alt="CARMART">
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
  <script src="/libs/jquery/dist/jquery.min.js"></script>

  <!-- Owl Carousel plugin -->
  <script src="/libs/owl.carousel/dist/owl.carousel.min.js"></script>

  <!-- jQuery Lazy plugin -->
  <script src="/libs/jquery-lazy/jquery.lazy.min.js"></script>

  <!-- Simplebar plugin -->
  <script src="/libs/simplebar/dist/simplebar.min.js"></script>

  <!-- Bootstrap bundle -->
  <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Jarallax plugin -->
  <script src="/libs/jarallax/dist/jarallax.min.js"></script>
  <script src="/libs/jarallax/dist/jarallax-video.min.js"></script>

  <!-- FlyTo plugin -->
  <script src="/libs/fly-to/dist/js/fly-to.min.js"></script>

  <!-- Main JavaScript -->
  <script src="/js/script.min.js"></script>

  <script src="switcher/switcher.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- END Scripts -->
</body>
    
    
</html>
