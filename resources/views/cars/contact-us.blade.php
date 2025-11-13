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
                        PrajapatiSales
                        <br>
                        Jamshedpur, Jharkhand
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Phone</h4>
                    <div class="mb-4 fs-special fs-6">
                        +91 82967 70287
                        <br>
                        <!-- +1 800 765 4321 -->
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Email</h4>
                    <div class="mb-4 fs-special fs-6">
                        ashujsr79@gmail.com
                        <br>
                        <!-- sales@carmartsite.com -->
                        <br>
                        <!-- support@carmartsite.com -->
                    </div>

                    <h4 class="fs-sm text-muted text-uppercase">Opening Times</h4>
                    <div class="mb-4 fs-special fs-6">
                        Monday - Sunday - 24/7
                        <!-- Monday - Friday 9.00AM to 6.00PM -->
                        <br>
                        <!-- Saturday - 10.00AM to 5.00PM -->
                        <br>
                        Please call us to book appointment
                    </div>

                </div>

            </div>
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