@extends('layouts.landing.app')

@section('title')
Contact Us
@endsection

@section('page-content')
<!-- Breadcrumb Style 1 -->
<div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

    <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h3 class="h3 mb-3 mb-lg-0">Contact Us</h3>
        </div>
    </div>
</div>
<!-- END Breadcrumb Style 1 -->
<!-- END Breadcrumb -->

<!-- Main -->
<main>

    <div class="bg-body">
        <div class="container col-xxl-8 py-5 p-0 px-3 px-sm-0">
            <div class="row g-5">

                <div class="col-md-6">

                    <h3 class="fs-5 mb-4 custom-color">Send Us A Message</h3>

                    <!-- Contact Us Form -->
                    <form id="contact-us-form" action="{{ url('post-contact') }}" method="POST">
                        @csrf
                        <div class=" mb-3">
                            <label for="user-title" class="form-label fw-bold">Title</label>
                            <select class="form-select custom-color text-dark-emphasis rounded-1" name="userSalutation" aria-label="Select your title and salutation">
                                <option selected>Select title</option>
                                <option value="mr">Mr</option>
                                <option value="mrs">Mrs</option>
                                <option value="miss">Miss</option>
                                <option value="sir">Sir</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="user-name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control custom-color" id="user-name" name="userName">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="user-phone" class="form-label fw-bold">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                </label>
                                <input type="text" class="form-control custom-color" id="user-phone" name="userPhone">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="user-email" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control custom-color" id="user-email" name="userEmail" aria-describedby="contactEmailHelp">
                            <div id="contactEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="user-message" class="form-label fw-bold">Message</label>
                            <textarea class="form-control custom-color" id="user-message" name="message" rows="3"></textarea>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input custom-color" id="confirm-terms" name="confirm-terms" checked>
                            <label class="form-check-label text-body-secondary" for="confirm-terms">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary custom-color fs-sm px-4 py-2 text-uppercase fw-bold text-spacing-md" data-requires-confirm="true">Submit</button>
                    </form>
                    <!-- END Contact Us Form -->

                </div>

                <div class="col-md-6">

                    <h3 class="fs-5 mb-4 custom-color">Contact Information</h3>

                    <h4 class="fs-sm text-muted text-uppercase">Address</h4>
                    <div class="mb-4 fs-special fs-6">
                        CarMart
                        <br>
                        Automotive Street
                        <br>
                        77 McKinney, Texas
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Phone</h4>
                    <div class="mb-4 fs-special fs-6">
                        +1 800 123 4567
                        <br>
                        +1 800 765 4321
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Email</h4>
                    <div class="mb-4 fs-special fs-6">
                        info@carmartsite.com
                        <br>
                        sales@carmartsite.com
                        <br>
                        support@carmartsite.com
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Opening Times</h4>
                    <div class="mb-4 fs-special fs-6">
                        Monday - Friday 9.00AM to 6.00PM
                        <br>
                        Saturday - 10.00AM to 5.00PM
                        <br>
                        Sunday - Please call us to book appointment
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
@endsection