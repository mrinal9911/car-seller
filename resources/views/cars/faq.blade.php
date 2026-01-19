@extends('layouts.landing.app')

@section('title')
FAQs
@endsection

@section('page-content')


<!-- Main -->
<main>


    <div class="container-fluid p-0">
        <div class="container py-5">
            <div class="row">

                <div class="col-md-12">

                    <h1 class="text-center mb-4 fw-bold custom-color">Frequently Asked Questions</h1>

                    <h2 class="text-center mb-4 h3">Answers to Your Common Queries</h2>

                    <p class="text-center mb-0 col-md-6 mx-auto">Welcome to our FAQ page. We've compiled a list of answers to the most commonly asked questions to provide you with helpful information and assistance. If you don't find the answers you're looking for, feel free to contact us for further support.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-body-tertiary">
        <div class="container col-xl-6 col-lg-7 py-5 p-0 bg-body-tertiary">
            <!-- FAQs Widget  -->
            <div class="widget reviews-widget reviews-widget-2 p-3 bg-body-tertiary rounded mb-4">
                <div class="widget-body">

                    <div class="col-12">
                        <div class="accordion" id="faq-1">
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq11" aria-expanded="false" aria-controls="faq11">
                                        What financing options are available for purchasing a car?
                                    </button>
                                </h2>
                                <div id="faq11" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                                    <div class="accordion-body">
                                        At our dealership, we offer a variety of financing options tailored to meet your needs. We work with trusted lenders to provide competitive rates and flexible terms, ensuring you find the financing solution that works best for you.
                                    </div>
                                </div>
                            </div>
                            <!-- END FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq13" aria-expanded="false" aria-controls="faq13">
                                        Can I schedule a test drive before making a purchase?
                                    </button>
                                </h2>
                                <div id="faq13" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                                    <div class="accordion-body">
                                        Of course! We encourage you to schedule a test drive to experience the vehicle firsthand. You can conveniently schedule a test drive online or contact our sales team, who will be happy to assist you in arranging a time that works for you.
                                    </div>
                                </div>
                            </div>
                            <!-- END FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq15" aria-expanded="false" aria-controls="faq15">
                                        What after-sales services do you provide?
                                    </button>
                                </h2>
                                <div id="faq15" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                                    <div class="accordion-body">
                                        Our commitment to customer satisfaction extends beyond the sale. We offer a range of after-sales services, including routine maintenance, repairs, and genuine OEM parts. Our skilled service technicians and dedicated parts department are here to ensure your vehicle stays in excellent condition throughout its lifespan.
                                    </div>
                                </div>
                            </div>
                            <!-- END FAQ Item -->
                            <!-- FAQ Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq16" aria-expanded="false" aria-controls="faq16">
                                        Are the used cars on your lot thoroughly inspected?
                                    </button>
                                </h2>
                                <div id="faq16" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                                    <div class="accordion-body">
                                        Yes, all our used cars undergo a rigorous inspection process performed by our certified technicians. We ensure that each vehicle meets our high standards of quality, reliability, and safety before it is made available for sale.
                                    </div>
                                </div>
                            </div>
                            <!-- END FAQ Item -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- END FAQs Widget  -->
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