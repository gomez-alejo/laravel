<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planix - Organiza tu mundo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    @vite(['resources/css/home.css'])
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="flex h-screen overflow-hidden">
        <!-- Overlay para móvil -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden opacity-0 pointer-events-none transition-opacity duration-300"></div>
        
        @include('includes.asideBar')

        <main class="flex-1 flex flex-col overflow-hidden">

        @include('includes.header')

        @yield('content')


        </main>
    </div>

    @vite(['resources/js/home.js'])
</body>
</html>