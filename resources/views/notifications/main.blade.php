<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('styles')
    <title>SideralSoft</title>
</head>

<body class="justify-content-center">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/">
                <h1 class="text-3xl font-black">SideralSoft</h1>
            </a>
        </div>
    </header>
    <main class="col-auto bg-danger p-5 text-center">
        <h2 class="">@yield('titulo')</h2>
        <p style="color: black">El resultado de la acción fue exitoso!</p>
        <a href="/"><button type="button">Regresar a la lista</button></a>
    </main>
</body>

</html>