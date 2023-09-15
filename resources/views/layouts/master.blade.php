<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>SnapPost | Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: white;
        }
    </style>
    
    @vite('resources/css/app.css')
</head>
<body class="from-gray-900 to-gray-600 bg-gradient-to-r bg-no-repeat h-screen">
    @include('components.navbar')
    @yield('content')
</body>
</html>