<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme - Máquinas Mortais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: Arial, sans-serif;
        }

        .card {
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Título do Filme: Máquinas Mortais</h1>
                <p class="lead"><strong>Diretor:</strong> Diretor de Máquinas Mortais</p>
                <p class="lead"><strong>Ano de Lançamento:</strong> 2018</p>
                <p>Descrição: A filha de Hellena Shor quer vingança.</p>
                <a href="{{ asset('trailer.mp4') }}" class="btn btn-secondary" target="_blank">Assistir Trailer</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('prime.jpg') }}" class="img-fluid rounded shadow-lg" alt="Máquinas Mortais">
            </div>
        </div>
        <hr>
        <h2 class="mt-5">Catálogo de Opções:</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <h3 class="card-title">Blu-ray</h3>
                    <p class="card-text text-muted">Alta definição</p>
                    <p class="card-text">Preço: R$ 29,99</p>
                    <a href="#" class="btn btn-primary">Escolher</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <h3 class="card-title">DVD</h3>
                    <p class="card-text text-muted">Qualidade padrão</p>
                    <p class="card-text">Preço: R$ 19,99</p>
                    <a href="#" class="btn btn-primary">Escolher</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4">
                    <h3 class="card-title">Video-Cassete</h3>
                    <p class="card-text text-muted">Nostalgia</p>
                    <p class="card-text">Preço: R$ 9,99</p>
                    <a href="#" class="btn btn-primary">Escolher</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
