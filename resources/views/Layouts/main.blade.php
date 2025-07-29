<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://kit.fontawesome.com/1f4a857732.js" crossorigin="anonymous"></script>
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