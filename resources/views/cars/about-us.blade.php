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
                    <p>Welcome to PrajapatiSales, where passion meets precision on the road. At PrajapatiSales, we are more than just a dealership; we are automotive enthusiasts dedicated to delivering unparalleled driving adventures. Our commitment to excellence extends beyond the vehicles we offer - it's embedded in our culture. </p>

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
            <div class="row row-cols-lg-3 row-cols-2 g-0 fs-special py-5">

                <div class="d-flex flex-column align-items-center text-center position-relative my-4">
                    <span class="fw-semibold fs-3">119</span>
                    <span class="text-muted text-uppercase">Cars Sold</span>
                    <div class="vr h-100 position-absolute end-0 top-0 opacity-15"></div>
                </div>

                <div class="d-flex flex-column align-items-center text-center position-relative my-4">
                    <span class="fw-semibold fs-3">468</span>
                    <span class="text-muted text-uppercase">Happy Customers</span>
                    <div class="vr h-100 position-absolute end-0 top-0 opacity-15 d-none d-lg-block"></div>
                </div>

                <div class="d-flex flex-column align-items-center text-center position-relative my-4">
                    <span class="fw-semibold fs-3">326</span>
                    <span class="text-muted text-uppercase">Positive Reviews</span>
                </div>

            </div>
        </div>

    </section>
    <!-- END Counters -->



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
<!-- END Main -->
@endsection