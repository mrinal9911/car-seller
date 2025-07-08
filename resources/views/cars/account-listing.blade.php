@extends('layouts.landing.app')

@section('title')
Dashboard - My Listings
@endsection

@section('page-content')

<!-- Breadcrumb Style 1 -->
<div class="breadcrumb-style-1
       bg-body-tertiary position-relative z-1 py-4" style="--bs-bg-opacity: 1">

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
                        <div class="bg-body-tertiary border rounded p-2 mb-4">
                            <ul class="nav flex-wrap border-transparent">
                                <!-- <li class="nav-item my-1">
                                        <a class="btn btn-sm d-flex align-items-center nav-link px-3 px-lg-4 mx-1
                            
                            bg-body-tertiary text-body-secondary fs-6" href="account-dashboard.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard me-2">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                                <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                                <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                                <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                            </svg>Dashboard
                                        </a>
                                    </li> -->
                                <li class="nav-item my-1">
                                    <a class="btn btn-sm d-flex align-items-center nav-link px-3 px-lg-4 mx-1
                            bg-body text-body-emphasis text-primary custom-color border border-light-subtle
                            " href="account-listings.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-list-details me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M13 5h8" />
                                            <path d="M13 9h5" />
                                            <path d="M13 15h8" />
                                            <path d="M13 19h5" />
                                            <path d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                            <path d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                                        </svg>Listings
                                    </a>
                                </li>
                                <li class="nav-item my-1">
                                    <a class="btn btn-sm d-flex align-items-center nav-link px-3 px-lg-4 mx-1
                            
                            bg-body-tertiary text-body-secondary fs-6" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-messages me-2">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                                            <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                                        </svg>Messages
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

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

@endsection