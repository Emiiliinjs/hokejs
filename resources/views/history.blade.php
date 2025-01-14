<!-- resources/views/history.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History of Hockey</title>
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

        /* History-specific styles */
        .history-header {
            text-align: center;
            padding: 60px 20px;
            margin-top: 100px; /* Adjusted for fixed navbar */
        }

        .history-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .history-section {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .history-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .history-section p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                        <a href="{{ url('/games') }}" class="nav-link">Games</a>
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
    <!-- History Section -->
    <div class="history-header">
        <h1>The History of Hockey</h1>
        <p>Explore the origins, evolution, and milestones of one of the world’s most exciting sports.</p>
    </div>

    <div class="history-section">
        <h2>Origins of Hockey</h2>
        <p>
            The origins of hockey can be traced back to ancient civilizations, where similar games were played with a ball or a small object using sticks. Evidence of such games can be found in ancient Egypt, Greece, and Persia. However, modern ice hockey began to take shape in Canada in the 19th century.
        </p>

        <h2>Modern Ice Hockey Emerges</h2>
        <p>
            By the mid-1800s, ice hockey began to evolve into the fast-paced sport we recognize today. It was first played on frozen ponds and lakes in Canada, where it became a popular recreational activity. The first organized game of ice hockey took place in 1875 in Montreal, Canada, marking the beginning of the sport's formalization.
        </p>

        <h2>The National Hockey League (NHL)</h2>
        <p>
            The NHL was founded in 1917 in Canada and quickly grew to become the premier professional ice hockey league in the world. Today, the league boasts teams across North America and continues to be the heart of the sport, with global stars competing for the prestigious Stanley Cup each year.
        </p>

        <h2>International Hockey</h2>
        <p>
            Hockey gained international recognition, and the first Olympic ice hockey tournament was held in 1924 at the Winter Olympics in Chamonix, France. Since then, hockey has become a globally watched sport, with tournaments and world championships held all around the world.
        </p>

        <h2>Hockey Today</h2>
        <p>
            Today, hockey is one of the most popular sports worldwide, with millions of fans, players, and teams spread across various countries. The sport continues to evolve, with technology enhancing the gameplay, and new stars emerging from all corners of the globe.
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
