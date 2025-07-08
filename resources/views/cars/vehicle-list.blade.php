@extends('layouts.landing.app')

@section('title')
Explore Vehicles
@endsection

@section('page-content')


<!-- Breadcrumb Style 1 -->
<div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

    <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h3 class="h3 mb-3 mb-lg-0">Explore Vehicles</h3>
        </div>

    </div>
</div>
<!-- END Breadcrumb Style 1 -->


<!-- Main -->
<main>

    <div class="container py-5 mb-md-4">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-lg-4">
                <!-- Filter widget -->
                <button class="btn btn-primary d-lg-none position-fixed bottom-0 start-0 mb-2 ms-2 z-3 d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#filter-widget" aria-controls="filter-widget">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal me-2" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 6l8 0" />
                        <path d="M16 6l4 0" />
                        <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 12l2 0" />
                        <path d="M10 12l10 0" />
                        <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M4 18l11 0" />
                        <path d="M19 18l1 0" />
                    </svg>Filter
                </button>

                <div class="offcanvas-lg offcanvas-start" data-bs-scroll="true" tabindex="-1" id="filter-widget" aria-labelledby="filter-widget-label">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="filter-widget-label">Filter</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#filter-widget" aria-label="Close"></button>
                    </div>

                </div>
            </aside>

            <!-- Content -->
            <!-- make the col-12 for the car class and the sm-12 with md 4 -->
            <section class="cars col-lg-12">

                <div class="row cars-grid">
                    <!-- Car  1-->
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                            </div>
                            <div class="card-image">
                                <div id="itemCarousel1" class="item-preview item-preview carousel slide carousel-fade">
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
                                    <a href="{{ url('/vehicle-details' ) }}" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">BMW X5</a>
                                </h3>
                                <p class="card-text">
                                    <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$95,895</span>
                                </p>
                                <div class="card-text border-top pt-2 row row-cols-3 g-2">
                                    <div>
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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



                    <!-- Car 2-->
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>



                            </div>
                            <div class="card-image">
                                <div id="itemCarousel2" class="item-preview item-preview carousel slide carousel-fade">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>




                                <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">


                                <span class="badge text-bg-primary text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Used</span>


                                <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Sold</span>


                            </div>
                            <div class="card-image">
                                <div id="itemCarousel3" class="item-preview item-preview carousel slide carousel-fade">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


                                <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>



                                <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>

                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                                <span class="badge text-bg-warning text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">Reserved</span>

                            </div>
                            <div class="card-image">
                                <div id="itemCarousel4" class="item-preview item-preview carousel slide carousel-fade">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

                                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



                                <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">

                                <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">New</span>




                            </div>
                            <div class="card-image">
                                <div id="itemCarousel5" class="item-preview item-preview carousel slide carousel-fade">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
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




                </div>

                <!-- Pagination -->
                <nav aria-label="Content navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item custom-color me-auto">
                            <a class="page-link page-prev border-0 p-0 bg-transparent" href="javascript:void()" aria-label="Previous">
                                <span class="d-flex align-items-center" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 6l-6 6l6 6" />
                                    </svg>
                                </span>
                                <span class="arrow-edge"></span>
                            </a>
                        </li>
                        <li class="page-item custom-color">
                            <a class="page-link active" href="javascript:void()">1</a>
                        </li>
                        <li class="page-item custom-color">
                            <a class="page-link" href="javascript:void()">2</a>
                        </li>
                        <li class="page-item custom-color">
                            <a class="page-link" href="javascript:void()">3</a>
                        </li>
                        <li class="page-item custom-color ms-auto">
                            <a class="page-link page-next border-0 p-0 bg-transparent" href="javascript:void()" aria-label="Next">
                                <span class="d-flex align-items-center" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 6l6 6l-6 6" />
                                    </svg>
                                </span>
                                <span class="arrow-edge"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
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

@endsection