<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/1f4a857732.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title> @yield('title', 'Baherindo Motor') </title>
</head>
<body>
    @include('layouts.navbar')
    <div>
        @yield('content')
  
    </div>
    @include('layouts.footer')
</body>
</html>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }
    .bg-gray-100 {
        background-color: #f7fafc;
    }
    .text-gray-700 {
        color: #4a5568;
    }
    .text-gray-900 {
        color: #1a202c;
    }
</style>