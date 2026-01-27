@extends('layouts.landing.app')

@section('title')
Edit Listing
@endsection

@section('page-content')


<!-- Breadcrumb Style -->
<div class="breadcrumb-style-1
       bg-body-tertiary 
      
      
      
      position-relative z-1 py-4" style="--bs-bg-opacity: 1">

    <div class="container d-lg-flex position-relative z-1 justify-content-between align-items-center py-2 py-lg-3">

        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h3 class="h3 mb-3 mb-lg-0">Edit Listing</h3>
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

                    <!-- Edit Listing -->
                    <form id="edit-listing-form" class="w-100 submit-listing-form" action="{{ url('/car/update/'. $car->id) }}" method="POST" enctype="multipart/form-data">
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
                                                                <input type="text" class="form-control custom-color" id="title" name="title" value="{{ old('title', $car->title) }}">
                                                            </div>
                                                            <!-- END Listing name -->


                                                            <!-- Listing brand -->
                                                            <div class="mb-3">
                                                                <label for="brand" class="form-label fw-semibold fs-special mb-1">Brand</label>
                                                                <select id="brand" name="brand" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select brand">
                                                                    <option selected>Select</option>

                                                                    <option value="Audi" {{ old('brand', $car->brand) == 'Audi' ? 'selected' : '' }}>Audi</option>
                                                                    <option value="BMW" {{ old('brand', $car->brand) == 'BMW' ? 'selected' : '' }}>BMW</option>
                                                                    <option value="Chevrolet" {{ old('brand', $car->brand) == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                                                                    <option value="Fiat" {{ old('brand', $car->brand) == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                                                                    <option value="Ford" {{ old('brand', $car->brand) == 'Ford' ? 'selected' : '' }}>Ford</option>
                                                                    <option value="GMC" {{ old('brand', $car->brand) == 'GMC' ? 'selected' : '' }}>GMC</option>
                                                                    <option value="Honda" {{ old('brand', $car->brand) == 'Honda' ? 'selected' : '' }}>Honda</option>
                                                                    <option value="Hyundai" {{ old('brand', $car->brand) == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                                                                    <option value="Jaguar" {{ old('brand', $car->brand) == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                                                                    <option value="Jeep" {{ old('brand', $car->brand) == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                                                                    <option value="Kia" {{ old('brand', $car->brand) == 'Kia' ? 'selected' : '' }}>Kia</option>
                                                                    <option value="Land Rover" {{ old('brand', $car->brand) == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                                                                    <option value="Lexus" {{ old('brand', $car->brand) == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                                                                    <option value="Mahindra" {{ old('brand', $car->brand) == 'Mahindra' ? 'selected' : '' }}>Mahindra</option>
                                                                    <option value="Mercedes-Benz" {{ old('brand', $car->brand) == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                                                                    <option value="MG" {{ old('brand', $car->brand) == 'MG' ? 'selected' : '' }}>MG</option>
                                                                    <option value="Mini Cooper" {{ old('brand', $car->brand) == 'Mini Cooper' ? 'selected' : '' }}>Mini Cooper</option>
                                                                    <option value="Mitsubishi" {{ old('brand', $car->brand) == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                                                                    <option value="Nissan" {{ old('brand', $car->brand) == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                                                                    <option value="Renault" {{ old('brand', $car->brand) == 'Renault' ? 'selected' : '' }}>Renault</option>
                                                                    <option value="Skoda" {{ old('brand', $car->brand) == 'Skoda' ? 'selected' : '' }}>Skoda</option>
                                                                    <option value="Maruti Suzuki" {{ old('brand', $car->brand) == 'Maruti Suzuki' ? 'selected' : '' }}>Maruti Suzuki</option>
                                                                    <option value="Tata" {{ old('brand', $car->brand) == 'Tata' ? 'selected' : '' }}>Tata</option>
                                                                    <option value="Toyota" {{ old('brand', $car->brand) == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                                                                    <option value="Volkswagen" {{ old('brand', $car->brand) == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                                                                    <option value="Volvo" {{ old('brand', $car->brand) == 'Volvo' ? 'selected' : '' }}>Volvo</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing brand -->


                                                            <!-- Listing model -->
                                                            <div class="mb-3">
                                                                <label for="model" class="form-label fw-semibold fs-special mb-1">Model</label>
                                                                <input type="text" class="form-control custom-color" id="model" name="model" value="{{ old('model', $car->model) }}">

                                                            </div>
                                                            <!-- END Listing model -->


                                                            <!-- Listing body -->
                                                            <div class="mb-3">
                                                                <label for="bodyType" class="form-label fw-semibold fs-special mb-1">Body</label>
                                                                <select id="bodyType" name="bodyType" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select body">
                                                                    <option selected>Select</option>

                                                                    <option value="4x4" {{ old('body_type', $car->body_type) == '4x4' ? 'selected' : '' }}>4x4</option>
                                                                    <option value="convertible" {{ old('body_type', $car->body_type) == 'convertible' ? 'selected' : '' }}>Convertible</option>
                                                                    <option value="coupe" {{ old('body_type', $car->body_type) == 'coupe' ? 'selected' : '' }}>Coupe</option>
                                                                    <option value="hatchback" {{ old('body_type', $car->body_type) == 'hatchback' ? 'selected' : '' }}>Hatchback</option>
                                                                    <option value="camper" {{ old('body_type', $car->body_type) == 'camper' ? 'selected' : '' }}>MPV</option>
                                                                    <option value="sedan" {{ old('body_type', $car->body_type) == 'sedan' ? 'selected' : '' }}>Sedan</option>
                                                                    <option value="sports" {{ old('body_type', $car->body_type) == 'sports' ? 'selected' : '' }}>Sports</option>
                                                                    <option value="suv" {{ old('body_type', $car->body_type) == 'suv' ? 'selected' : '' }}>SUV</option>
                                                                    <option value="mpv" {{ old('body_type', $car->body_type) == 'mpv' ? 'selected' : '' }}>MPV</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing body -->


                                                            <!-- Listing transmission -->
                                                            <div class="mb-3">
                                                                <label for="transmission" class="form-label fw-semibold fs-special mb-1">Transmission</label>
                                                                <select id="transmission" name="transmission" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select transmission">
                                                                    <option selected>Select</option>

                                                                    <option value="automatic" {{ old('transmission', $car->transmission) == 'automatic' ? 'selected' : '' }}>Automatic</option>
                                                                    <option value="semi-auto" {{ old('transmission', $car->transmission) == 'semi-auto' ? 'selected' : '' }}>Semi Auto</option>
                                                                    <option value="manual" {{ old('transmission', $car->transmission) == 'manual' ? 'selected' : '' }}>Manual</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing transmission -->


                                                            <!-- Listing fuel -->
                                                            <div class="mb-3">
                                                                <label for="fuelType" class="form-label fw-semibold fs-special mb-1">Fuel</label>
                                                                <select id="fuelType" name="fuelType" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select fuel">
                                                                    <option selected>Select</option>

                                                                    <option value="petrol" {{ old('fuel_type', $car->fuel_type) == 'petrol' ? 'selected' : '' }}>Petrol</option>
                                                                    <option value="diesel" {{ old('fuel_type', $car->fuel_type) == 'diesel' ? 'selected' : '' }}>Diesel</option>
                                                                    <option value="hybrid-electric" {{ old('fuel_type', $car->fuel_type) == 'hybrid-electric' ? 'selected' : '' }}>Hybrid Electric</option>
                                                                    <option value="hybrid-petrol-el" {{ old('fuel_type', $car->fuel_type) == 'hybrid-petrol-el' ? 'selected' : '' }}>Hybrid Petrol/EL</option>
                                                                    <option value="petrol-mhev" {{ old('fuel_type', $car->fuel_type) == 'petrol-mhev' ? 'selected' : '' }}>Petrol/MHEV</option>
                                                                    <option value="diesel-mhev" {{ old('fuel_type', $car->fuel_type) == 'diesel-mhev' ? 'selected' : '' }}>Diesel/MHEV</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing fuel -->


                                                            <!-- Listing Color -->
                                                            <div class="mb-3">
                                                                <label for="color" class="form-label fw-semibold fs-special mb-1">Color</label>
                                                                <select id="color" name="color" class="form-select custom-color text-dark-emphasis rounded-1">

                                                                    <option value="">Select</option>
                                                                    <option value="White" {{ old('color', $car->color) == 'White' ? 'selected' : '' }}>White</option>
                                                                    <option value="Black" {{ old('color', $car->color) == 'Black' ? 'selected' : '' }}>Black</option>
                                                                    <option value="Silver" {{ old('color', $car->color) == 'Silver' ? 'selected' : '' }}>Silver</option>
                                                                    <option value="Gray" {{ old('color', $car->color) == 'Gray' ? 'selected' : '' }}>Gray</option>
                                                                    <option value="Red" {{ old('color', $car->color) == 'Red' ? 'selected' : '' }}>Red</option>
                                                                    <option value="Blue" {{ old('color', $car->color) == 'Blue' ? 'selected' : '' }}>Blue</option>
                                                                    <option value="Green" {{ old('color', $car->color) == 'Green' ? 'selected' : '' }}>Green</option>
                                                                    <option value="Yellow" {{ old('color', $car->color) == 'Yellow' ? 'selected' : '' }}>Yellow</option>
                                                                    <option value="Brown" {{ old('color', $car->color) == 'Brown' ? 'selected' : '' }}>Brown</option>
                                                                    <option value="Orange" {{ old('color', $car->color) == 'Orange' ? 'selected' : '' }}>Orange</option>
                                                                    <option value="Maroon" {{ old('color', $car->color) == 'Maroon' ? 'selected' : '' }}>Maroon</option>
                                                                    <option value="Gold" {{ old('color', $car->color) == 'Gold' ? 'selected' : '' }}>Gold</option>
                                                                    <option value="Beige" {{ old('color', $car->color) == 'Beige' ? 'selected' : '' }}>Beige</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing Color -->


                                                            <!-- Listing power -->
                                                            <div class="mb-3">
                                                                <label for="engine" class="form-label fw-semibold fs-special mb-1">Engine (CC)</label>
                                                                <input type="text" class="form-control custom-color" id="engine" name="engine" value="{{ old('engine', $car->engine) }}">
                                                            </div>
                                                            <!-- END Listing power -->

                                                            <!-- Location -->
                                                            <div class="mb-3">
                                                                <label for="location" class="form-label fw-semibold fs-special mb-1">Available At</label>
                                                                <input type="text" class="form-control custom-color" id="location" name="location" value="{{ old('location', $car->location) }}">
                                                            </div>
                                                            <!-- END Location -->

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
                                                                <select id="regYear" name="regYear" class="form-select custom-color text-dark-emphasis rounded-1">
                                                                    <option value="">Select</option>
                                                                    @php
                                                                    $currentYear = date('Y');
                                                                    $startYear = 2000; // Earliest possible year
                                                                    @endphp
                                                                    @for ($year = $currentYear; $year >= $startYear; $year--)
                                                                    <option value="{{ $year }}" {{ old('regYear', $car->year) == $year ? 'selected' : '' }}>
                                                                        {{ $year }}
                                                                    </option>
                                                                    @endfor
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

                                                                    @php
                                                                    $months = [
                                                                    1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June",
                                                                    7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"];
                                                                    @endphp

                                                                    @foreach ($months as $num => $name)
                                                                    <option value="{{ $num }}" {{ old('regMonth', $car->month) == $num ? 'selected' : '' }}>
                                                                        {{ $name }}
                                                                    </option>
                                                                    @endforeach
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

                                                                    <option value="First" {{ old('ownership_type', $car->ownership_type) == 'First' ? 'selected' : '' }}>First Owner</option>
                                                                    <option value="Second" {{ old('ownership_type', $car->ownership_type) == 'Second' ? 'selected' : '' }}>Second Owner</option>
                                                                    <option value="Third" {{ old('ownership_type', $car->ownership_type) == 'Third' ? 'selected' : '' }}>Third Owner</option>
                                                                    <option value="Fourth or more" {{ old('ownership_type', $car->ownership_type) == 'Fourth or more' ? 'selected' : '' }}>Fourth or more Owner</option>


                                                                </select>
                                                            </div>
                                                            <!-- END Listing ownership-type -->


                                                            <!-- Listing condition -->
                                                            <div class="mb-3">
                                                                <label for="condition" class="form-label fw-semibold fs-special mb-1">Condition</label>
                                                                <select id="condition" name="condition" class="form-select custom-color text-dark-emphasis rounded-1" aria-label="Select condition">
                                                                    <option selected>Select</option>

                                                                    <option value="No Accident History" {{ old('condition', $car->condition) == 'No Accident History' ? 'selected' : '' }}>No Accident History</option>
                                                                    <option value="Restored After Accident" {{ old('condition', $car->condition) == 'Restored After Accident' ? 'selected' : '' }}>Restored After Accident</option>

                                                                </select>
                                                            </div>
                                                            <!-- END Listing condition -->


                                                            <!-- Listing driven -->
                                                            <div class="mb-3">
                                                                <label for="driven" class="form-label fw-semibold fs-special mb-1">Driven(KM)</label>
                                                                <input type="text" class="form-control custom-color" id="driven" name="driven" value="{{ old('driven', $car->driven) }}">
                                                            </div>
                                                            <!-- END Listing driven -->


                                                            <!-- Listing price -->
                                                            <div class="mb-3">
                                                                <label for="price" class="form-label fw-semibold fs-special mb-1">Price</label>
                                                                <input type="text" class="form-control custom-color" id="price" name="price" value="{{ old('price', $car->price) }}">
                                                            </div>
                                                            <!-- END Listing price -->


                                                            <!-- Listing price-negotiable -->
                                                            <div class="mb-3 d-inline-flex align-items-end">
                                                                <!-- Hidden input to submit false when checkbox is not checked -->
                                                                <input type="hidden" name="isNegotiable" value="0">

                                                                <div class="form-check d-flex align-items-top mb-1">
                                                                    <input class="form-check-input custom-color"
                                                                        type="checkbox"
                                                                        id="isNegotiable"
                                                                        name="isNegotiable"
                                                                        value="1"
                                                                        {{ old('is_price_negotiable', $car->is_price_negotiable) ? 'checked' : '' }}>
                                                                    <label class="form-check-label" for="isNegotiable">Price Negotiable</label>
                                                                </div>
                                                            </div>
                                                            <!-- END Listing price-negotiable -->


                                                            <!-- Listing description -->
                                                            <div class="mb-2 w-100">
                                                                <label for="description" class="form-label fw-semibold fs-special mb-1">Description</label>
                                                                <textarea class="form-control custom-color" id="description" name="description" rows="6">{{ old('description', $car->description) }}</textarea>
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
                    <!-- END Edit Listing -->

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
        document.getElementById('edit-listing-form').submit();
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