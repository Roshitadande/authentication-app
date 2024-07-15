<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication-App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            width:12%;
            position: fixed;
            top:50px;
            bottom: 0;
            left: 0;
            z-index: 100;
            background-color: #343a40; 
            padding-top:5%;
        }
        .sidebar-heading {
            color: #ffffff;
            font-size: 1.2rem;
            text-align: center;
            padding: 1rem 0;
        }
        .navbar {
            width:100%;
            position: fixed;
            top:0;
            background-color: #007bff; 
            z-index: 1;
        }
        .content-area {
            z-index: 0;
            margin-left: 15rem; 
            padding: 100px;
        }
        .footer {
            background-color: #f8f9fa; /* Light background color */
            text-align: center;
            padding: 10px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    @include('dashboard.navbar')

    @include('dashboard.sidebar')

    <div class="content-area">
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>
    @include('dashboard.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
