<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Hockey World</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #003366, #00509e);
            color: #fff;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .navbar {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.85); /* Slight transparency */
            padding: 10px 20px; /* Add some padding */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
            z-index: 1000;
            position: fixed;
            top: 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #ffa500 !important; /* Bright orange to match the theme */
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover {
            color: #ffa500 !important; /* Hover effect */
        }
        .hero {
            text-align: center;
            padding: 120px 20px 50px; /* Adjusted for navbar height */
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #ffa500;
            border-color: #ffa500;
        }
        .hero img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            box-shadow: none; /* Removed shadow */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Hockey World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/history') }}" class="nav-link">History</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/history') }}" class="nav-link">Games</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link" style="text-decoration: none; color: white;">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
            
        </div>
    </div>
</nav>




    <div class="hero">
        <img src="favicon.ico.png" alt="Hockey Action" width="50" />
        <h1>Welcome to the World of Hockey</h1>
        <p>Discover the exciting world of hockey, a sport filled with passion, speed, and a rich history that spans centuries.</p>
        <a href="/history" class="btn btn-primary btn-lg">Learn About Hockey History</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
