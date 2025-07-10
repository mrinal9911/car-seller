@extends('layouts.landing.app')

@section('title')
About Us
@endsection

@section('page-content')

<!-- Breadcrumb Style 1 -->
<div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

    <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h3 class="h3 mb-3 mb-lg-0">About Us</h3>
        </div>

    </div>
</div>
<!-- END Breadcrumb Style 1 -->


<!-- Main -->
<main>

    <div class="container col-xxl-8 py-5">
        <div class="row g-4">
            <div class="col-12 col-md-6">
                <div class="pe-4">
                    <h2 class="fs-5 text-uppercase mb-3 custom-color">About Us</h2>
                    <p>Welcome to CarMart, where passion meets precision on the road. At CarMart, we are more than just a dealership; we are automotive enthusiasts dedicated to delivering unparalleled driving adventures. Our commitment to excellence extends beyond the vehicles we offer - it's embedded in our culture. </p>

                    <p>As avid automotive enthusiasts, we've crafted a haven for fellow car connoisseurs and seekers of driving exhilaration. We transcend the ordinary, curating an immersive experience that celebrates the artistry, innovation, and sheer thrill of the automotive world.</p>

                    <p>Join us as we navigate the highways of style, performance, and cutting-edge technology, steering towards a horizon of automotive excellence. Drive with us, where the journey is as extraordinary as the destination.</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img class="img-fluid object-fit-cover lazy" data-src="https://www.themecrest.top/templates/carmart/demo/images/yard.jpg" alt="Our Showroom">
            </div>
        </div>
    </div>

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
<!-- END Main -->
@endsection