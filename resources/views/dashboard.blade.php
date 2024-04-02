<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de Filmes</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            
        }

        .header-title {
            color: #0000FF; 
            font-weight: bold;
        }


    </style>
</head>

<body>
<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl header-title leading-tight">
                {{ __('MEU SISTEMA DE ALUGUEL') }}
            </h2>
        </x-slot>



        <!--  DESTAQUES-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-4 text-center"><b>Catálogo de Filmes (SUPER LANÇAMENTOS - "2024")</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                        <br> 
                        <img src="{{ asset('prim.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                        <h5 class="card-title mb-0">Sonic</h5>
                            <p class="card-text text-muted">Sonic um extraterrestre.</p>
                            <a href="{{ route('filme.show', ['id' => 1]) }}" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('prime.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Máquinas Mortais</h5>
                            <p class="card-text text-muted">A filha de Hellena Shor quer vingança.</p>
                            <a href="{{ route('maquinas-mortais') }}" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('primeiro.png') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Godzilla VS Kong</h5>
                            <p class="card-text text-muted">Dois Monstros TITÃS.</p>
                            <a href="{{ route('zilla-vs-kong') }}" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>



<!--    Catálogo de Filmes LANÇAMENTOS        -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-4 text-center"><b>Catálogo de Filmes (LANÇAMENTOS)</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('prim.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Sonic</h5>
                            <p class="card-text text-muted">Sonic um extraterrestre.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('prime.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Máquinas Mortais</h5>
                            <p class="card-text text-muted">A filha de Hellena Shor quer vingança.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('primeiro.png') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Godzilla VS Kong</h5>
                            <p class="card-text text-muted">Dois Monstros TITÃS.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>






<!-- APENAS CATÁLOGOS -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-4 text-center"><b>Catálogo de Filmes</b></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('prim.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Sonic</h5>
                            <p class="card-text text-muted">Sonic um extraterrestre.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('prime.jpg') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Máquinas Mortais</h5>
                            <p class="card-text text-muted">A filha de Hellena Shor quer vingança.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow">
                    <br>
                        <img src="{{ asset('primeiro.png') }}" class="card-img-top img-fluid mx-auto d-block" style="max-width: 200px;" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">Godzilla VS Kong</h5>
                            <p class="card-text text-muted">Dois Monstros TITÃS.</p>
                            <a href="#" class="btn btn-primary">Alugar</a>
                            <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Trailer</a>
                        </div>
                    </div>
                </div>


                
    </x-app-layout>
</body>
</html>