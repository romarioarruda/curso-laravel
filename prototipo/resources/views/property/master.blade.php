<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <title>Prototipo:: CRUD</title>
</head>
<body>
    <main class="container">
        <p>
            <a href="<?= url('/imoveis/') ?>">Lista de imóveis</a> | <a href="<?= url('/imoveis/novo') ?>">Cadastrar novo imóvel</a>
        </p>

        @yield('content')
    </main>
    <script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>