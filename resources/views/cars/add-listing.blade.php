@extends('layouts.landing.app')

@section('title')
Add Listing
@endsection

@section('page-content')


<!-- Breadcrumb Style -->
<div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

    <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h3 class="h3 mb-3 mb-lg-0">Add Listing</h3>
        </div>
    </div>
</div>
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


                                                            <!-- Listing Name -->
                                                            <div class="mb-3">
                                                                <label for="listing-name" class="form-label fw-semibold fs-special mb-1">Car Title/Name</label>
                                                                <input type="text" class="form-control custom-color" id="listing-name" name="listing-name">
                                                            </div>
                                                            <!-- END Listing name -->


                                                            <!-- Listing brand -->
                                                            <div class="mb-3">
                                                                <label for="listing-brand" class="form-label fw-semibold fs-special mb-1">Brand</label>
                                                                <select id="listing-brand" name="listing-brand" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select brand">
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
                                                            <!-- END Listing brand -->


                                                            <!-- Listing model -->
                                                            <div class="mb-3">
                                                                <label for="listing-model" class="form-label fw-semibold fs-special mb-1">Model</label>
                                                                <input type="text" class="form-control custom-color" id="listing-model" name="listing-model">

                                                            </div>
                                                            <!-- END Listing model -->


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


                                                            <!-- Listing Color -->
                                                            <div class="mb-3">
                                                                <label for="listing-color" class="form-label fw-semibold fs-special mb-1">Color</label>
                                                                <select id="listing-color" name="listing-color" class="form-select custom-color text-dark-emphasis rounded-1">
                                                                    <option selected>Select</option>
                                                                    <option value="White">White</option>
                                                                    <option value="Black">Black</option>
                                                                    <option value="Silver">Silver</option>
                                                                    <option value="Gray">Gray</option>
                                                                    <option value="Red">Red</option>
                                                                    <option value="Blue">Blue</option>
                                                                    <option value="Green">Green</option>
                                                                    <option value="Yellow">Yellow</option>
                                                                    <option value="Brown">Brown</option>
                                                                    <option value="Orange">Orange</option>
                                                                    <option value="Maroon">Maroon</option>
                                                                    <option value="Gold">Gold</option>
                                                                    <option value="Beige">Beige</option>
                                                                </select>
                                                            </div>
                                                            <!-- END Listing Color -->


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


                                                            <!-- Listing power -->
                                                            <div class="mb-3">
                                                                <label for="listing-power" class="form-label fw-semibold fs-special mb-1">Power</label>
                                                                <input type="text" class="form-control custom-color" id="listing-power" name="listing-power">
                                                            </div>
                                                            <!-- END Listing power -->


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


                                                            <!-- Listing reg-year -->
                                                            <div class="mb-3">
                                                                <label for="listing-reg-year" class="form-label fw-semibold fs-special mb-1">Registration Year</label>
                                                                <select id="listing-reg-year" name="listing-reg-year" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select year of registration">
                                                                    <option selected>Select</option>
                                                                </select>
                                                            </div>
                                                            <!-- END Listing reg-year -->

                                                            <!-- Script to populate registration year -->
                                                            <script>
                                                                const select = document.getElementById('listing-reg-year');
                                                                const currentYear = new Date().getFullYear();
                                                                const startYear = 2000;

                                                                for (let year = currentYear; year >= startYear; year--) {
                                                                    const option = document.createElement('option');
                                                                    option.value = year;
                                                                    option.textContent = year;
                                                                    select.appendChild(option);
                                                                }
                                                            </script>


                                                            <!-- Listing reg-month -->
                                                            <div class="mb-3">
                                                                <label for="listing-reg-month" class="form-label fw-semibold fs-special mb-1">Registration Month</label>
                                                                <select id="listing-reg-month" name="listing-reg-month" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select month of registration">
                                                                    <option selected>Select</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing reg-month -->

                                                            <!-- Script to populate registration month -->
                                                            <script>
                                                                const monthSelect = document.getElementById('listing-reg-month');
                                                                const months = [
                                                                    "January", "February", "March", "April", "May", "June",
                                                                    "July", "August", "September", "October", "November", "December"
                                                                ];

                                                                months.forEach((month, index) => {
                                                                    const option = document.createElement('option');
                                                                    option.value = index + 1; // 1 for Jan, 12 for Dec
                                                                    option.textContent = month;
                                                                    monthSelect.appendChild(option);
                                                                });
                                                            </script>


                                                            <!-- Listing ownership-type -->
                                                            <div class="mb-3">
                                                                <label for="listing-ownership-type" class="form-label fw-semibold fs-special mb-1">Ownership Type</label>
                                                                <select id="listing-ownership-type" name="listing-ownership-type" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select ownership type">
                                                                    <option selected>Select</option>
                                                                    <option value="First">First Owner</option>
                                                                    <option value="Second">Second Owner</option>
                                                                    <option value="Third">Third Owner</option>
                                                                    <option value="Fourth or more">Fourth or more Owner</option>
                                                                </select>
                                                            </div>
                                                            <!-- END Listing ownership-type -->


                                                            <!-- Listing condition -->
                                                            <div class="mb-3">
                                                                <label for="listing-condition" class="form-label fw-semibold fs-special mb-1">Condition</label>
                                                                <select id="listing-condition" name="listing-condition" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select condition">
                                                                    <option selected>Select</option>

                                                                    <option value="clean">No Accident History</option>

                                                                    <option value="restored">Restored After Accident</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing condition -->


                                                            <!-- Listing driven -->
                                                            <div class="mb-3">
                                                                <label for="listing-driven" class="form-label fw-semibold fs-special mb-1">Driven(KM)</label>
                                                                <input type="text" class="form-control custom-color" id="listing-driven" name="listing-driven">
                                                            </div>
                                                            <!-- END Listing driven -->


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
                                        <div class="accordion mb-4" id="listing-main-view-accordion">
                                            <div class="accordion-item mb-2 border rounded overflow-hidden">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button bg-light-subtle custom-color fs-5 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#listing-main-view" aria-expanded="true" aria-controls="listing-main-view">
                                                        Listing Main View Images
                                                    </button>
                                                </h2>
                                                <div id="listing-main-view" class="accordion-collapse collapse show" data-bs-parent="#listing-main-view-accordion">
                                                    <div class="accordion-body">

                                                        <div class="form-text w-100 mn-2">
                                                            Max file size is 5 MB. We accept PNG, JPG and JPEG.
                                                        </div>

                                                        <div class="row row-cols-auto g-3 justify-content-center py-4 pt-2 my-2 mb-0 pb-0">

                                                            <div class="upload-container-main w-100 custom-color">
                                                                <div id="drag-drop-area-main" class="drag-drop-area-main bg-body-tertiary rounded border border-2 cursor-pointer text-secondary p-5 fs-6">
                                                                    <p class="m-0">Drag and drop images here or click to select files</p>
                                                                    <input class="d-none" type="file" id="file-input" name="images-main" multiple accept="image/*">
                                                                </div>
                                                                <div id="gallery-main" class="gallery-main d-flex flex-wrap justify-content-center position-relative gap-2 p-4"></div>
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

@endsection