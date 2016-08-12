<!DOCTYPE html>
<html lang="es">
<head>
@include('includes.head')
</body>
</head>
<body id="app-layout">

    <div class="container">

        <header class="row">
            @include('includes.header')
        </header>

        <div id="main" class="row">
            @yield('content')
        </div>

        <footer class="row">
            @include('includes.footer')
        </footer>

    </div>

    @include('includes.assets')
</body>
</html>
