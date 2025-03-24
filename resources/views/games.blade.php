@extends('layouts.app') <!-- Extends the main layout -->

@section('title', 'Hockey Games - Hockey World') <!-- Page title -->

@section('content')
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Hockey World</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="#navbarNav">
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
        background-color: rgba(0, 0, 0, 0.85);
        padding: 10px 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        position: fixed;
        top: 0;
    }
    .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
        color: #ffa500 !important;
    }
    .navbar-nav .nav-link {
        color: #fff !important;
        font-weight: 500;
        margin: 0 10px;
        transition: color 0.3s ease-in-out;
    }
    .navbar-nav .nav-link:hover {
        color: #ffa500 !important;
    }
    .hero {
        text-align: center;
        padding: 120px 20px 50px;
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
        box-shadow: none;
    }
</style>

<div class="container mt-5">
    <h1 class="text-center">Hockey Games</h1>
    <p class="text-center">
        Explore the latest hockey games, scores, and upcoming events. Stay up-to-date with everything happening in the world of hockey!
    </p>

    <div class="row mt-5">
        <!-- Upcoming Games Section -->
        <div class="history-header">
            <h3>Upcoming Games</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Team A vs Team B</strong>
                    <span class="text-muted d-block">Date: January 20, 2025 | Time: 7:00 PM</span>
                </li>
                <li class="list-group-item">
                    <strong>Team C vs Team D</strong>
                    <span class="text-muted d-block">Date: January 22, 2025 | Time: 6:30 PM</span>
                </li>
                <li class="list-group-item">
                    <strong>Team E vs Team F</strong>
                    <span class="text-muted d-block">Date: January 25, 2025 | Time: 8:00 PM</span>
                </li>
            </ul>
        </div>

        <!-- Recent Scores Section -->
        <div class="history-header">
            <h3>Recent Scores</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Team G</strong> 4 - 3 <strong>Team H</strong>
                    <span class="text-muted d-block">Date: January 14, 2025</span>
                </li>
                <li class="list-group-item">
                    <strong>Team I</strong> 2 - 5 <strong>Team J</strong>
                    <span class="text-muted d-block">Date: January 13, 2025</span>
                </li>
                <li class="list-group-item">
                    <strong>Team K</strong> 3 - 3 <strong>Team L</strong> (Overtime)
                    <span class="text-muted d-block">Date: January 12, 2025</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div class="text-center mt-5">
        <p>Want to see the full schedule or detailed scores?</p>
        <a href="{{ url('/schedule') }}" class="btn btn-primary">View Full Schedule</a>
    </div>
</div>
@endsection
