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
        <a class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-decoration-none" href="/">
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
                <span class="text-muted">Piska more, Ranchi</span>
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
                <a class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color" href="/home" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link link-body-emphasis px-3 py-3 fw-bold custom-color">Vehicle</a>
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

</body>