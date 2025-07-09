

@extends('layouts.landing.app')

@section('title')
Vehicles Details
@endsection

    @section('css-links')
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup stylesheet -->
    <link rel="stylesheet" href="libs/magnific-popup/dist/magnific-popup.css">
    <!-- Plyr stylesheet -->
    <link rel="stylesheet" href="libs/plyr/dist/plyr.css">
    @endsection

    @section('page-content')
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
                                        <form id="add-offer-form" action="{{ url('post-contact') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="user-title" class="form-label">Title</label>
                                                <select class="form-select custom-color text-dark-emphasis rounded-1" name="userSalutation" aria-label="Select your title and salutation">
                                                    <option selected>Select title</option>
                                                    <option value="mr">Mr</option>
                                                    <option value="mrs">Mrs</option>
                                                    <option value="miss">Miss</option>
                                                    <option value="sir">Sir</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-name" class="form-label">Name</label>
                                                <input type="text" class="form-control custom-color" id="user-name" name="userName">
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                </label>
                                                <input type="text" class="form-control custom-color" id="user-phone" name="userPhone">
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-email" class="form-label">Email</label>
                                                <input type="email" class="form-control custom-color" id="user-email" name="userEmail" aria-describedby="offerEmailHelp">
                                                <div id="offerEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="user-offer" class="form-label">Your Offer Price</label>
                                                <input type="text" class="form-control custom-color" id="user-offer" name="message">
                                            </div>
                                            <div class="mb-3 form-check">
                                                <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-add-offer" name="confirm-terms-add-offer" checked>
                                                <label class="form-check-label text-body-secondary" for="confirm-terms-add-offer">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                </label>
                                            </div>
                                            <!-- Hidden input to send static page name -->
                                            <input type="hidden" name="page_name" value="vehicleDetailPage">
                                            <input type="hidden" name="page_tag" value="offer">
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
                    <ul class="nav nav-tabs custom-color justify-content-start mb-4" id="carTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link link-body-emphasis fw-bold fs-6 py-3 px-4 active" id="car-pictures-tab" data-bs-toggle="tab" data-bs-target="#car-pictures" type="button" role="tab" aria-controls="car-pictures" aria-selected="true">Gallery <span class="badge rounded-pill bg-secondary text-bg-secondary  text-bg-primary ms-1">15</span>
                            </button>
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
                    <!-- END Car Description -->


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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                            <form id="add-enquiry-form" action="{{ url('post-contact') }}" method="POST">
                                                @csrf
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
                                                            <select class="form-select custom-color text-dark-emphasis rounded-1" name="userSalutation" aria-label="Select your title and salutation">
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
                                                            <input type="text" class="form-control custom-color" id="user-name" name="userName">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-phone" class="form-label">Phone <span class="text-secondary fs-sm">(Optional)</span>
                                                    </label>
                                                    <input type="text" class="form-control custom-color" id="user-phone" name="userPhone">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-email" class="form-label">Email</label>
                                                    <input type="email" class="form-control custom-color" id="user-email" name="userEmail" aria-describedby="enquiryEmailHelp">
                                                    <div id="enquiryEmailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="user-enquiry" class="form-label">Notes</label>
                                                    <textarea class="form-control custom-color" id="user-enquiry" name="message" rows="3"></textarea>
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input custom-color" id="confirm-terms-add-enquiry" name="confirm-terms-add-enquiry" checked>
                                                    <label class="form-check-label text-body-secondary" for="confirm-terms-add-enquiry">I agree to <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="terms-of-service.html">Terms of Service</a> and <a class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover" href="privacy-policy.html">Privacy Policy</a>
                                                    </label>
                                                </div>
                                                <!-- Hidden input to send static page name -->
                                                <input type="hidden" name="page_name" value="vehicleDetailPage">
                                                <input type="hidden" name="page_tag" value="enquiry">
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
    @endsection

    
     @section('page-src')
    <!-- Owl Carousel plugin -->
    <script src="libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <!-- Magnific Popup plugin -->
    <script src="libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Judo Spin plugin -->
    <script src="libs/judo-spin/dist/js/judo-spin.min.js"></script>
    <!-- Plyr plugin -->
    <script src="libs/plyr/dist/plyr.min.js"></script>
     @endsection
