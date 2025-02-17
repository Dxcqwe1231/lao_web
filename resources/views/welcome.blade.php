<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        body {
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">YourProject</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="vh-100 d-flex align-items-center justify-content-center bg-light text-center">
        <div class="container">
            <h1 class="display-4">Welcome to Your Project</h1>
            <p class="lead">This is a brief description of your awesome project. Join us now!</p>
            <a href="{{ route ('login') }}" class="btn btn-primary btn-lg m-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg m-2">Signup</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4">
        <p>&copy; 2025 YourProject. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
