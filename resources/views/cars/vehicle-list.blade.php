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

                    <!-- Car -->
                    @foreach($cars as $car)
                    <div class="col-sm-12 col-md-4 mb-4 mx-auto mx-md-0">
                        <div class="card car-item border bg-body-tertiary">
                            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">
                                <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>
                                <button type="button" class="btn btn-favorites p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to favorites"></button>
                            </div>
                            <div class="position-absolute start-0 top-0 pt-3 ps-3 z-2 d-flex align-items-start">
                                <?php if ($car['status'] == 'sold'): ?>
                                    <span class="badge text-bg-danger text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">
                                        <?= $car['status'] ?>
                                    </span>
                                <?php else: ?>
                                    <span class="badge text-bg-success text-uppercase rounded-1 fs-xs-alt fw-normal text-spacing-sm me-1">
                                        <?= 'New' ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            {{-- Image --}}
                            <div class="card-image">
                                <div id="itemCarousel{{ $car['id'] }}" class="item-preview item-preview carousel slide carousel-fade">
                                    <div class="carousel-inner rounded-top">
                                        @if(!empty($car['mainImage']) && !empty($car['mainImage']['image_path']))
                                        <div class="carousel-item listing-image-box rounded-top active">
                                            <img
                                                data-src="{{ asset('storage/' . $car['mainImage']['image_path']) }}"
                                                class="img-fluid object-fit-cover rounded-top lazy"
                                                alt="{{ $car['brand'] . ' ' . $car['title'] }}">
                                        </div>
                                        @else
                                        <div class="carousel-item listing-image-box rounded-top active">
                                            <img
                                                data-src="{{ asset('storage/images/default-car.png') }}"
                                                class="img-fluid object-fit-cover rounded-top lazy"
                                                alt="No image available">
                                        </div>
                                        @endif
                                        {{-- Add additional images here if available --}}
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#itemCarousel{{ $car['id'] }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#itemCarousel{{ $car['id'] }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            {{-- Body --}}
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="{{ url('/vehicle-details/' . $car['id']) }}" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">
                                        {{ $car['brand'] . ' ' . $car['title'] }}
                                    </a>
                                </h3>
                                <p class="card-text">
                                    <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">₹{{ indianNumberFormat($car['price']) }}</span>
                                </p>
                                <div class="card-text border-top pt-2 row row-cols-3 g-2">

                                    {{-- Year --}}
                                    <div>
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-calendar-bolt" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M13.5 21h-7.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v5"></path>
                                                <path d="M16 3v4"></path>
                                                <path d="M8 3v4"></path>
                                                <path d="M4 11h16"></path>
                                                <path d="M19 16l-2 3h4l-2 3"></path>
                                            </svg> {{ $car['year'] }}
                                        </span>
                                    </div>

                                    {{-- Driven --}}
                                    <div>
                                        <span class="icon-wrapper d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="me-1 icon icon-tabler icon-tabler-gauge" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M13.41 10.59l2.59 -2.59"></path>
                                                <path d="M7 12a5 5 0 0 1 5 -5"></path>
                                            </svg> {{ indianNumberFormat($car['driven']) }} Km
                                        </span>
                                    </div>

                                    {{-- Transmission --}}
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
                                            </svg> {{ ucfirst($car['transmission']) }}
                                        </span>
                                    </div>

                                    {{-- Engine --}}
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
                                            {{ $car['engine'] }}cc
                                        </span>
                                    </div>

                                    {{-- Fuel --}}
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
                                            {{ ucfirst($car['fuel_type']) }}
                                        </span>
                                    </div>

                                    {{-- Color --}}
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
                                            {{ ucfirst($car['color']) }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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