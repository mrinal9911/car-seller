<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadyDrive</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
            background: url("{{ asset('storage/images/car-hero2.jpg') }}") no-repeat center center/cover;
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

    <section class="hero">
        <h1>Exquisite, Elegant, Futuristic</h1>
        <p>Crafting a refined aesthetic that stands at the intersection of timeless sophistication and forward-thinking design.</p>
        <button class="btn">Get Start</button>
        <div class="scroll-indicator">&#x25BC;</div>
    </section>
</body>

</html>