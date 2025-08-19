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
                            " href="{{ url('dashboard') }}">
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
                                    <a id="loadMessagesBtn" class="btn btn-sm d-flex align-items-center nav-link px-3 px-lg-4 mx-1
                            
                            bg-body-tertiary text-body-secondary fs-6" href="">
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

                        <div class="card border mb-4 overflow-hidden thiss">

                            <div class="card-header p-3 border-bottom d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center bg-body">
                                <h5 class="card-title mb-3 m-sm-0">My Listings <span class="badge bg-primary bg-opacity-10 text-primary ms-2">{{ $carDetails->count() }} Items</span>
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

                                            @foreach ($carDetails as $car)
                                            <tr>
                                                <td>
                                                    <div class="listing-image rounded-1 overflow-hidden border border-light-subtle">
                                                        @if ($car->mainImage && $car->mainImage->image_path)
                                                        <img class="img-fluid lazy" data-src="{{ asset('storage/' . $car->mainImage->image_path) }}" alt="{{ $car->title }}">
                                                        @else
                                                        <img class="img-fluid lazy" data-src="{{ asset('storage/images/default-car.png') }}" alt="No Image">
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="m-0">
                                                        {{ $car->brand }} {{ $car->title }}
                                                    </h6>
                                                </td>
                                                <td>
                                                    <span class="text-body-secondary car-price fs-6 fw-semibold text-primary custom-color">
                                                        ₹ {{ indianNumberFormat($car->price) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-body-secondary">{{ \Carbon\Carbon::parse($car->created_at)->format('M d, Y') }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center listing-status">
                                                        <span class="badge 
                                                            {{     $car->status === 'published' ? 'bg-success' 
                                                                : ($car->status === 'sold' ? 'bg-danger' 
                                                                : ($car->status === 'archived' ? 'bg-warning' : 'bg-secondary')) 
                                                            }} me-2">
                                                        </span>
                                                        <span class="text-body-secondary text-capitalize">{{ $car->status }}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-body-secondary">{{ $car->views ?? 0 }}</span>
                                                </td>
                                                <td>
                                                    <div class="action">
                                                        <a href="/vehicle-details/{{ $car->id }}" class="btn btn-sm action-preview position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Preview"></a>
                                                        <a href="/car/edit/{{ $car->id }}" class="btn btn-sm action-edit position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="tooltip" data-bs-title="Edit"></a>
                                                        <a href="#" class="btn btn-sm action-delete position-relative btn-light border rounded-circle ms-2 fs-xs" role="button" data-bs-toggle="modal" data-bs-target="#deleteOptionModal" data-car-id="{{ $car->id }}"></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>


                        <!-- Modal Delete Option  -->
                        <div class="modal fade" id="deleteOptionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteOptionModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-secondary-subtle py-2">
                                        <h5 class="modal-title" id="deleteOptionModalLabel">Manage Car Status</h5>
                                        <button type="button" class="btn-close rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-lg-4">
                                        <form action="{{ url('car/manage-status') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="car_id" id="modalCarId">

                                            <div class="mb-3">
                                                <label for="actionType" class="form-label">Select Action</label>
                                                <select class="form-select rounded-1" id="actionType" name="action_type" required>
                                                    <option value="">-- Choose Action --</option>
                                                    <option value="archived">Archived</option>
                                                    <option value="sold">Mark as Sold</option>
                                                    <option value="delete">Delete</option>
                                                </select>
                                            </div>

                                            <div class="text-end">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var deleteOptionModal = document.getElementById('deleteOptionModal');
                                deleteOptionModal.addEventListener('show.bs.modal', function(event) {
                                    var button = event.relatedTarget; // Button that triggered the modal
                                    var carId = button.getAttribute('data-car-id'); // Extract info from data-* attributes
                                    var input = deleteOptionModal.querySelector('#modalCarId');
                                    input.value = carId;
                                });
                            });
                        </script>

                        <!-- END - Modal Delete Option -->

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

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messagesBtn = document.getElementById('loadMessagesBtn');
            const container = document.querySelector('.thiss');

            messagesBtn.addEventListener('click', function(event) {
                event.preventDefault(); 

                fetch('/list-message')
                    .then(response => response.text())
                    .then(html => {
                        container.innerHTML = html; 
                    })
                    .catch(err => {
                        console.error('Error loading messages:', err);
                    });
            });
        });
    </script> -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.thiss');

            // Example: Hook your "Messages" button/tab
            const messagesBtn = document.getElementById('loadMessagesBtn');
            const listingsBtn = document.getElementById('loadListingsBtn'); // if you have one

            // Backup the original listings HTML so we can restore it
            const originalListingsHTML = container.innerHTML;

            // Load messages table
            messagesBtn.addEventListener('click', function(event) {
                event.preventDefault();

                fetch('/list-message')
                    .then(response => response.json())
                    .then(data => {
                        let table = `

                        <div class="card-header p-3 border-bottom d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center bg-body">
                                <h5 class="card-title mb-3 m-sm-0">Messages<span class="badge bg-primary bg-opacity-10 text-primary ms-2">  Items</span>
                                </h5>
                            </div>

                    <div class="account-listings table-responsive border-0">
                        <table class="table align-middle p-4 mb-0 table-shrink">
                            <thead class="bg-body-tertiary text-uppercase fs-sm border-top border-bottom">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Salutation</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Tag</th>
                                </tr>
                            </thead>
                            <tbody>
                `;

                        data.forEach(item => {
                            table += `
                        <tr>
                            <td>${item.id}</td>
                            <td>${item.salutation || ''}</td>
                            <td>${item.name}</td>
                            <td>${item.phone}</td>
                            <td>${item.email}</td>
                            <td>${item.message}</td>
                            <td>${item.tag || ''}</td>
                        </tr>
                    `;
                        });

                        table += `
                            </tbody>
                        </table>
                    </div>
                `;

                        container.innerHTML = table;
                    })
                    .catch(err => {
                        console.error('Error loading messages:', err);
                        container.innerHTML = `<p class="text-danger">Failed to load messages.</p>`;
                    });
            });

            // Restore listings if needed
            if (listingsBtn) {
                listingsBtn.addEventListener('click', function(event) {
                    event.preventDefault();
                    container.innerHTML = originalListingsHTML;
                });
            }
        });
    </script>



</main>
<!-- END Main -->

@endsection