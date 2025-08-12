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
                    <form id="add-listing-form" class="w-100 submit-listing-form" action="{{ url('car/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

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
                                                                <label for="title" class="form-label fw-semibold fs-special mb-1">Car Title/Name</label>
                                                                <input type="text" class="form-control custom-color" id="title" name="title">
                                                            </div>
                                                            <!-- END Listing name -->


                                                            <!-- Listing brand -->
                                                            <div class="mb-3">
                                                                <label for="brand" class="form-label fw-semibold fs-special mb-1">Brand</label>
                                                                <select id="brand" name="brand" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select brand">
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

                                                                    <option value="Maruti-Suzuki">Maruti Suzuki</option>

                                                                    <option value="Tata">Tata</option>

                                                                    <option value="Toyota">Toyota</option>

                                                                    <option value="Volkswagen">Volkswagen</option>

                                                                    <option value="Volvo">Volvo</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing brand -->


                                                            <!-- Listing model -->
                                                            <div class="mb-3">
                                                                <label for="model" class="form-label fw-semibold fs-special mb-1">Model</label>
                                                                <input type="text" class="form-control custom-color" id="model" name="model">

                                                            </div>
                                                            <!-- END Listing model -->


                                                            <!-- Listing body -->
                                                            <div class="mb-3">
                                                                <label for="bodyType" class="form-label fw-semibold fs-special mb-1">Body</label>
                                                                <select id="bodyType" name="bodyType" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select body">
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
                                                                <label for="transmission" class="form-label fw-semibold fs-special mb-1">Transmission</label>
                                                                <select id="transmission" name="transmission" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select transmission">
                                                                    <option selected>Select</option>


                                                                    <option value="automatic">Automatic</option>

                                                                    <option value="semi-auto">Semi Auto</option>

                                                                    <option value="manual">Manual</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing transmission -->


                                                            <!-- Listing fuel -->
                                                            <div class="mb-3">
                                                                <label for="fuelType" class="form-label fw-semibold fs-special mb-1">Fuel</label>
                                                                <select id="fuelType" name="fuelType" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select fuel">
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
                                                                <label for="color" class="form-label fw-semibold fs-special mb-1">Color</label>
                                                                <select id="color" name="color" class="form-select custom-color text-dark-emphasis rounded-1">
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
                                                            <!-- <div class="mb-3">
                                                                <label for="engine" class="form-label fw-semibold fs-special mb-1">Engine</label>
                                                                <select id="engine" name="engine" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select engine">
                                                                    <option selected>Select</option>


                                                                    <option value="1">0 - 1L</option>

                                                                    <option value="2">1L - 2L</option>

                                                                    <option value="3">2L - 3L</option>

                                                                    <option value="4">3L - 4L</option>

                                                                    <option value="5">4L - 5L</option>

                                                                    <option value="6">5L+</option>




                                                                </select>
                                                            </div> -->
                                                            <!-- END Listing engine -->


                                                            <!-- Listing power -->
                                                            <div class="mb-3">
                                                                <label for="engine" class="form-label fw-semibold fs-special mb-1">Engine (CC)</label>
                                                                <input type="text" class="form-control custom-color" id="engine" name="engine">
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
                                                                <label for="regYear" class="form-label fw-semibold fs-special mb-1">Registration Year</label>
                                                                <select id="regYear" name="regYear" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select year of registration">
                                                                    <option selected>Select</option>
                                                                </select>
                                                            </div>
                                                            <!-- END Listing reg-year -->

                                                            <!-- Script to populate registration year -->
                                                            <script>
                                                                const select = document.getElementById('regYear');
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
                                                                <label for="regMonth" class="form-label fw-semibold fs-special mb-1">Registration Month</label>
                                                                <select id="regMonth" name="regMonth" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select month of registration">
                                                                    <option selected>Select</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing reg-month -->

                                                            <!-- Script to populate registration month -->
                                                            <script>
                                                                const monthSelect = document.getElementById('regMonth');
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
                                                                <label for="ownershipType" class="form-label fw-semibold fs-special mb-1">Ownership Type</label>
                                                                <select id="ownershipType" name="ownershipType" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select ownership type">
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
                                                                <label for="condition" class="form-label fw-semibold fs-special mb-1">Condition</label>
                                                                <select id="condition" name="condition" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select condition">
                                                                    <option selected>Select</option>

                                                                    <option value="No Accident History">No Accident History</option>

                                                                    <option value="Restored After Accident">Restored After Accident</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing condition -->


                                                            <!-- Listing driven -->
                                                            <div class="mb-3">
                                                                <label for="driven" class="form-label fw-semibold fs-special mb-1">Driven(KM)</label>
                                                                <input type="text" class="form-control custom-color" id="driven" name="driven">
                                                            </div>
                                                            <!-- END Listing driven -->


                                                            <!-- Listing price -->
                                                            <div class="mb-3">
                                                                <label for="price" class="form-label fw-semibold fs-special mb-1">Price</label>
                                                                <input type="text" class="form-control custom-color" id="price" name="price">
                                                            </div>
                                                            <!-- END Listing price -->


                                                            <!-- Listing price-negotiable -->
                                                            <div class="mb-3 d-inline-flex align-items-end">
                                                                <!-- Hidden input to submit false when checkbox is not checked -->
                                                                <input type="hidden" name="isNegotiable" value="0">

                                                                <div class="form-check d-flex align-items-top mb-1">
                                                                    <input class="form-check-input custom-color" type="checkbox" id="isNegotiable" name="isNegotiable" value="1">
                                                                    <label class="form-check-label" for="isNegotiable">Price Negotiable</label>
                                                                </div>
                                                            </div>
                                                            <!-- END Listing price-negotiable -->


                                                            <!-- Listing description -->
                                                            <div class="mb-2 w-100">
                                                                <label for="description" class="form-label fw-semibold fs-special mb-1">Description</label>
                                                                <textarea class="form-control custom-color" id="description" name="description" rows="6"></textarea>
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

                                                        <div class="form-text mb-2">You can select multiple. PNG, JPG, JPEG. Max 5MB each.</div>

                                                        <div class="mb-3">
                                                            <input type="file" name="images[]" id="gallery_images_input" multiple accept="image/*" class="form-control">
                                                        </div>

                                                        <div id="gallery_images_preview" class="d-flex flex-wrap gap-3"></div>
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

                                                        <div class="form-text mb-2">Only one image. PNG, JPG, JPEG. Max 5MB.</div>

                                                        <div class="mb-3">
                                                            <input type="file" name="main_image" id="main_image_input" accept="image/*" class="form-control">
                                                        </div>

                                                        <div id="main_image_preview" class="mt-2"></div>
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
                                                    <a href="#" role="button" onclick="submitListingForm(event)"
                                                        class="btn btn-lg btn-primary custom-color fs-6 px-4 py-3 text-uppercase fw-bold text-spacing-md d-inline-flex align-content-center">
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

<script>
    function submitListingForm(event) {
        event.preventDefault(); // prevent anchor default navigation
        document.getElementById('add-listing-form').submit();
    }
</script>

<!-- Image Upload Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mainInput = document.getElementById('main_image_input');
        const mainPreview = document.getElementById('main_image_preview');

        const galleryInput = document.getElementById('gallery_images_input');
        const galleryPreview = document.getElementById('gallery_images_preview');

        // 🔸 Main Image Preview
        mainInput.addEventListener('change', () => {
            const file = mainInput.files[0];
            mainPreview.innerHTML = ''; // Clear previous

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '150px';
                    img.style.height = '150px';
                    img.style.objectFit = 'cover';
                    img.className = 'rounded shadow-sm';
                    mainPreview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });

        // 🔸 Gallery Images Preview (Multiple)
        galleryInput.addEventListener('change', () => {
            const files = Array.from(galleryInput.files);
            galleryPreview.innerHTML = ''; // Clear previous

            files.forEach(file => {
                if (!file.type.startsWith('image/')) return;

                const reader = new FileReader();
                reader.onload = e => {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'position-relative';
                    wrapper.style.width = '100px';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.className = 'rounded shadow-sm';

                    const removeBtn = document.createElement('button');
                    removeBtn.innerHTML = '&times;';
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                    removeBtn.style.borderRadius = '50%';
                    removeBtn.style.width = '24px';
                    removeBtn.style.height = '24px';
                    removeBtn.style.padding = '0';
                    removeBtn.onclick = () => wrapper.remove();

                    wrapper.appendChild(img);
                    wrapper.appendChild(removeBtn);
                    galleryPreview.appendChild(wrapper);
                };
                reader.readAsDataURL(file);
            });
        });
    });
</script>

@endsection