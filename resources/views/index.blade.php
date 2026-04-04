<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photobooth - Home</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="img/logo.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle border border-light">
                <span class="fw-bold">Snap & Joy Photobooth</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home Page</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Our Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow-1">
        <!-- Hero Section with Carousel for simple built-in animation -->
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active text-white text-center py-5" style="height: 60vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/hero1.jpg') center/cover;">
                    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="display-3 fw-bold mb-4">Capture Your Best Moments in Surabaya</h1>
                        <p class="lead mb-4">Premium photobooth experiences for your events, weddings, and parties across Jawa Timur!</p>
                        <a href="{{ route('services') }}" class="btn btn-warning btn-lg rounded-pill shadow text-dark fw-bold">View Packages</a>
                    </div>
                </div>
                <div class="carousel-item text-white text-center py-5" style="height: 60vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/hero2.jpg') center/cover;">
                    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="display-3 fw-bold mb-4">Unlimited Fun & Instant Prints</h1>
                        <p class="lead mb-4">Bring joy to your guests with our interactive kiosks!</p>
                        <a href="{{ route('contact') }}" class="btn btn-warning btn-lg rounded-pill shadow text-dark fw-bold">Book Now</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <div class="container my-5 py-5 text-center">
            <h2 class="mb-4 fw-bold text-dark">Why Choose Us?</h2>
            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm bg-white h-100 border-top border-warning border-3">
                        <h4 class="text-dark fw-bold mb-3">High Quality Prints</h4>
                        <p class="text-muted">Studio-quality lighting and professional DSLR cameras ensure your guests look their best.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm bg-white h-100 border-top border-warning border-3">
                        <h4 class="text-dark fw-bold mb-3">Custom Props</h4>
                        <p class="text-muted">A huge variety of fun, quirky, and themed props tailored for your specific event.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded shadow-sm bg-white h-100 border-top border-warning border-3">
                        <h4 class="text-dark fw-bold mb-3">Instant Sharing</h4>
                        <p class="text-muted">Share photos instantly via email or QR code direct from the photobooth screen.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2026 Snap & Joy Photobooth. All Rights Reserved.</p>
            <small class="text-white-50">Laravel Assignment Templates</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>