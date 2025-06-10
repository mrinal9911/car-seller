<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ReadyDrive</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0a0a0a;
            color: white;
            overflow-x: hidden;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 4rem;
            position: relative;
            z-index: 10;
        }

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
</head>

<body>
    <header>
        <h1 style="color: white; font-weight: bold; font-size: 1.5rem;">READY<span style="color: #bbb">DRIVE</span></h1>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="/">Vehicles</a>
            <a href="#">Discover</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
        </nav>
    </header>

    <!-- <section class="hero">
        <h1>Exquisite, Elegant, Futuristic</h1>
        <p>Crafting a refined aesthetic that stands at the intersection of timeless sophistication and forward-thinking design.</p>
        <button class="btn">Get Start</button>
        <div class="scroll-indicator">&#x25BC;</div>
    </section> -->

    <!-- Carousel Section -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{ asset('storage/images/car-hero.jpg') }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Exquisite, Elegant, Futuristic</h1>
                    <p>Crafting a refined aesthetic that stands at the intersection of timeless sophistication and forward-thinking design.</p>
                    <button class="btn">Get Start</button>
                    <div class="scroll-indicator">&#x25BC;</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/images/car-hero2.jpg') }}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Exquisite, Elegant, Futuristic</h1>
                    <p>Crafting a refined aesthetic that stands at the intersection of timeless sophistication and forward-thinking design.</p>
                    <button class="btn">Get Start</button>
                    <div class="scroll-indicator">&#x25BC;</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/images/car-hero3.avif') }}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Exquisite, Elegant, Futuristic</h1>
                    <p>Crafting a refined aesthetic that stands at the intersection of timeless sophistication and forward-thinking design.</p>
                    <button class="btn">Get Start</button>
                    <div class="scroll-indicator">&#x25BC;</div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>