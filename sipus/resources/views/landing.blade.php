<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center" style="margin-top: 100px;">
        <h1>Welcome to Sipus</h1>
        <p>Your one-stop solution for job searching and reviews.</p>
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mx-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg mx-2">Register</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
