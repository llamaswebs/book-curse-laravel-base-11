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

    <main class="w-full">
        @yield('content')
    </main>

    <section class="w-full">
        @yield('morecontent')
    </section>
    <div class="fixed bottom-0 left-0 w-full">
        @if (session('status'))
            @if (session('status') == 'Post  actualizada' || session('status') == 'Category  actualizada')
                <div class="bg-yellow-500 text-white p-4 text-center text-3xl font-bold">
                    {{ session('status') }}
                </div>
            @else
                @if (session('status') == 'Post eliminada' || session('status') == 'Category eliminada')
                    <div class="bg-red-500 text-white p-4 text-center text-3xl font-bold">
                        {{ session('status') }}
                    </div>
                @else
                    <div class="bg-green-500 text-white p-4 text-center text-3xl font-bold">
                        {{ session('status') }}
                    </div>
                @endif
            @endif
        @endif
    </div>
</body>


</html>
