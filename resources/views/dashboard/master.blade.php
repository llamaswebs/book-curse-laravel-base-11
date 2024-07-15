<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Asegúrate de incluir Tailwind CSS en tu proyecto -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center min-h-screen">
    <header class="w-full text-center">
        <!-- Contenido del header -->
    </header>

    <main class="w-full ">
        @yield('content')
    </main>

    <section class="w-full ">
        @yield('morecontent')
    </section>
</body>
</html>
