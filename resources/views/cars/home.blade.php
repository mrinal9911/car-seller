@extends('layouts.landing.app')

@section('title')
Home
@endsection


@section('css-links')
<link rel="stylesheet" href="/libs/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="/libs/owl.carousel/dist/assets/owl.theme.default.min.css">

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
  }

  /* 
  body {
    background-color: #0a0a0a;
    color: white;
    overflow-x: hidden;
  } */

  /* header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem 4rem;
    position: relative;
    z-index: 10;
  } */

  nav a {
    margin-left: 2rem;
    color: #bbb;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
  }

  nav a.active,
  nav a:hover {
    color: #f00;
  }

  .hero {
    position: relative;
    height: 100vh;
    width: 100%;
    /* background: url("{{ asset('storage/images/car-hero2.jpg') }}") no-repeat center center/cover; */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 2rem;
    padding-top: 12px;
    justify-content: flex-start;
  }

  .hero h1 {
    font-size: 3rem;
    font-weight: 700;
    color: white;
  }

  .hero p {
    font-size: 1rem;
    color: #ddd;
    margin-top: 1rem;
    max-width: 600px;
  }

  .carousel-caption .btn {
    margin-top: 2rem;
    background-color: transparent;
    border: 2px solid #f00;
    color: #f00;
    padding: 0.75rem 2rem;
    border-radius: 999px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .carousel-caption {
    bottom: 10.25rem !important;
  }

  .carousel-caption .btn:hover {

    background-color: #f00;
    color: white;
  }

  .hero .btn {
    margin-top: 2rem;
    background-color: transparent;
    border: 2px solid #f00;
    color: #f00;
    padding: 0.75rem 2rem;
    border-radius: 999px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .hero .btn:hover {
    background-color: #f00;
    color: white;
  }

  .scroll-indicator {
    margin-top: 3rem;
    font-size: 2rem;
    color: #eee;
    animation: bounce 2s infinite;
  }

  @keyframes bounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(10px);
    }
  }
</style>
@endsection

@section('page-content')

<!-- Main -->
<main>

  <!-- Hero Filter -->
  <section class="position-relative custom-color">

    <div class="jarallax" data-jarallax data-speed="0.2">

      <img class="jarallax-img lazy" data-src="./images/cars/bmw-x5/021.jpg" alt="">


      <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.42) 0px, rgba(255, 255, 255, 0.08) 67%); opacity: "></span>

      <div class="container position-relative col-xxl-8 py-5">
        <div class="row g-0 align-items-start" style="height: 70vh; !important">
          <div class="col-lg-4 rounded-3 p-4 my-3 my-md-5 text-white">
          </div>
        </div>
      </div>
    </div>

    </div>

  </section>
  <!-- END Hero Filter -->

  <!-- Browse by brand logo -->
  <section class="position-relative custom-color
    
    ">


    <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: var(--bs-primary); background-image: ; opacity: 0.04"></span>

    <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
      <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Browse by Brand</h2>
      <div class="browse-brands-carousel owl-carousel owl-theme" data-loop="false" data-nav="true" data-dots="false" data-autoplay="false">



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Alfa Romeo</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/alfaromeo.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Aston Martin</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/astonmartin.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Audi</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/audi.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Bentley</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/bentley.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">BMW</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/bmw.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Bugatti</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/bugatti.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Chevrolet</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/chevrolet.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Chrysler</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/chrysler.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Citroen</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/citroen.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Ferrari</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/ferrari.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Fiat</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/fiat.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Ford</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/ford.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">GMC</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/gmc.svg)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Honda</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/honda.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Hyundai</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/hyundai.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Infiniti</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/infiniti.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Jaguar</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/jaguar.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Jeep</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/jeep.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Kia</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/kia.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Lamborghini</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/lamborghini.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Land Rover</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/landrover.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Maserati</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/maserati.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Mazda</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/mazda.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">McLaren</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/mclaren.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Mercedes-Benz</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/mercedes.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">MINI</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/mini.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Mitsubishi</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/mitsubishi.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Nissan</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/nissan.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Opel</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/opel.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Peugeot</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/peugeot.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Porsche</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/porsche.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Renault</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/renault.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Rolls Royce</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/rollsroyce.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Subaru</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/subaru.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Suzuki</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/suzuki.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Tesla</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/tesla.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Toyota</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/toyota.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Vauxhall</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/vauxhall.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Volkswagen</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/volkswagen.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



        <!-- Brand Item -->
        <div class="item">
          <div class="card border border-light-subtle">
            <div class="card-body d-flex flex-column align-items-center">
              <h5 class="card-title fw-bold fs-6 fs-special">Volvo</h5>
              <p class="card-text">
              <div class="car-brand-img overflow-hidden position-relative">
                <div style="--car-brand-icon: url(../icons/brands/volvo.html)" class="car-brand text-primary fs-5 fw-bold"></div>
                <a href="javascript:void(0)" class="stretched-link"></a>
              </div>
              </p>
            </div>
          </div>
        </div>
        <!-- END Brand Item -->



      </div>
    </div>

  </section>
  <!-- END Browse by brand logo -->


  <!-- Featured Cars -->
  <section class="position-relative custom-color">


    <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: ; opacity: "></span>

    <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0 position-relative">
      <h2 class="fs-5 text-uppercase pb-3 mb-4 custom-color ">Featured Cars</h2>
      <div class="recent-cars-carousel basic-carousel owl-carousel owl-theme" data-loop="false" data-nav="true" data-dots="false" data-autoplay="false">



        <!-- Car -->
        <div class="item">
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
                <a href="/vehicle-details" class="fw-bold fs-5 text-decoration-none link-body-emphasis link-opacity-100 link-opacity-75-hover">BMW X5</a>
              </h3>
              <p class="card-text">
                <span class="car-price text-primary fs-special fs-5 fw-bold custom-color">$95,895</span>
              </p>
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

              <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



              <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">

              <button type="button" class="btn btn-compare compare-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from compare"></button>



              <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


              <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


              <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
            <div class="position-absolute end-0 top-0 pt-3 pe-3 z-2">


              <button type="button" class="btn btn-compare p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add to compare"></button>


              <button type="button" class="btn btn-favorites favorites-active p-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Remove from favorites"></button>


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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
          <div class="card border bg-body-tertiary custom-color" style="background-color: rgba(var(--bs-primary-rgb), 0.03) !important; border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
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
              <div class="card-text border-top pt-2 row row-cols-3 g-2" style="border-color: rgba(var(--bs-primary-rgb), 0.12) !important;">
                <div>
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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
                  <span class="d-inline-flex align-items-center p-1 px-2 me-1 bg-body-secondary rounded-1 text-body-secondary bg-opacity-75 w-100 fs-sm" style="background-color: rgba(var(--bs-primary-rgb), 0.09) !important;">
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

  </section>
  <!-- END Featured Cars -->

  <!-- Counters -->
  <section class="stats-counter border-top border-bottom position-relative custom-color">


    <span class="position-absolute top-0 start-0 w-100 h-100 custom-color" style="background-color: ; background-image: ; opacity: "></span>

    <div class="container">
      <div class="row row-cols-lg-4 row-cols-2 g-0 fs-special py-5">

        <div class="d-flex flex-column align-items-center text-center position-relative my-4">
          <span class="fw-semibold fs-3">44,785</span>
          <span class="text-muted text-uppercase">Cars Sold</span>
          <div class="vr h-100 position-absolute end-0 top-0 opacity-15"></div>
        </div>

        <div class="d-flex flex-column align-items-center text-center position-relative my-4">
          <span class="fw-semibold fs-3">39,687</span>
          <span class="text-muted text-uppercase">Happy Customers</span>
          <div class="vr h-100 position-absolute end-0 top-0 opacity-15 d-none d-lg-block"></div>
        </div>

        <div class="d-flex flex-column align-items-center text-center position-relative my-4">
          <span class="fw-semibold fs-3">32,650</span>
          <span class="text-muted text-uppercase">Positive Reviews</span>
          <div class="vr h-100 position-absolute end-0 top-0 opacity-15"></div>
        </div>

        <div class="d-flex flex-column align-items-center text-center position-relative my-4">
          <span class="fw-semibold fs-3">79</span>
          <span class="text-muted text-uppercase">Awards Received</span>
        </div>

      </div>
    </div>

  </section>
  <!-- END Counters -->

  <!-- Careers -->
  <section class="position-relative custom-color
            
              bg-body-tertiary
            
            ">

    <div class="container position-relative col-xxl-8 py-5 px-3 px-sm-0">
      <div class="row info-v2 g-0">

        <!-- <div class="col-lg-5 col-md-10 mx-md-auto"> -->
        <!-- Reviews Widget  -->

        <!-- END Reviews Widget  -->
        <!-- </div> -->
        <div class="col-lg-12 col-md-10 mx-md-auto">
          <!-- FAQs Widget  -->
          <div class="widget reviews-widget reviews-widget-2 p-3 bg-body-tertiary rounded mb-4">
            <h3 class="widget-title fs-6 text-uppercase mb-3">Frequently Asked Questions</h3>
            <div class="widget-body">
              <div class="row g-2">

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
                        <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq12" aria-expanded="false" aria-controls="faq12">
                          Can I trade in my current vehicle for a new one?
                        </button>
                      </h2>
                      <div id="faq12" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                        <div class="accordion-body">
                          Absolutely! We accept trade-ins and offer competitive trade-in values. Our team will assess the condition of your vehicle and provide you with a fair appraisal, which can be applied toward the purchase of your new car.
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
                        <button class="accordion-button fw-bold custom-color  collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#faq14" aria-expanded="false" aria-controls="faq14">
                          Do you offer extended warranties on your vehicles?
                        </button>
                      </h2>
                      <div id="faq14" class="accordion-collapse collapse " data-bs-parent="#faq-1">
                        <div class="accordion-body">
                          Yes, we offer extended warranty options for added peace of mind. Our dealership works with reputable warranty providers to offer comprehensive coverage plans that protect your investment and provide additional support after your purchase.
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
          </div>
          <!-- END FAQs Widget  -->
        </div>

      </div>
    </div>

  </section>
  <!-- END Careers -->




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