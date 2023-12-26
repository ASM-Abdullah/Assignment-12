
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Online Ticketing System</title>
    <!-- Add your stylesheets, scripts, or other head elements here -->
</head>
<body>

    <header>
        <h1>Tiki Online Ticketing System</h1>
        <!-- Add any header content here -->
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('trips.index') }}">Available Trips</a></li>
            <li><a href="{{ route('seat_allocations.index') }}">Your Seat Allocations</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add footer content here -->
    </footer>

</body>
</html>