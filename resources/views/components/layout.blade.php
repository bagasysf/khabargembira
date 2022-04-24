<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ $title }}

    <!-- Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Alpine JS -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&family=Cinzel:wght@400;500;600;700;800;900&family=DM+Serif+Display:ital@0;1&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Sacramento&display=swap" rel="stylesheet"> 
    <!-- CDN Fonts -->
    <link href="http://fonts.cdnfonts.com/css/august-script-free" rel="stylesheet">
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    {{ $slot }}

    <script>
      feather.replace()
    </script>
</body>

</html>