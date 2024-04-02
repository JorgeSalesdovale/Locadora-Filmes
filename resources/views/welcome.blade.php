<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>SISTEMA LOCADORA</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            background-color: #000000 !important; 
        }
        .navbar {
            background-color: #dc3545 !important; 
        }
        .carousel-item {
            height: 900px; 
        }
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
        #carouselExampleSlidesOnly {
            width: 100%;
            margin: auto;
            margin-top: 0px;
        }
        .phrase {
            text-align: center;
            color: white;
            margin-top: -305px; /* Ajuste a margem superior conforme necessário */
            font-size: 36px; /* Tamanho da fonte */
            font-family: 'Roboto', sans-serif; /* Fonte */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Sistema de Aluguel de Filmes</b></a>
            <div class="d-flex">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-dark">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark">Fazer Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-dark">Registre-se</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('prim.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('prime.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('primeiro.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <p class="phrase">Alugue seus filmes e divirta-se com o cinema em CASA.</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
