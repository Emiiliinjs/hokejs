@extends('layouts.app') <!-- Extends the main layout -->

@section('title', 'Hockey Games - Hockey World') <!-- Page title -->

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Hockey Games</h1>
    <p class="text-center">
        Explore the latest hockey games, scores, and upcoming events. Stay up-to-date with everything happening in the world of hockey!
    </p>

    <div class="row mt-5">
        <!-- Upcoming Games Section -->
        <div class="col-md-6">
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
        <div class="col-md-6">
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
