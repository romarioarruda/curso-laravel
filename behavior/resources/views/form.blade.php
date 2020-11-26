<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Formulário:: teste de rotas</title>
</head>
<body>
    
    <main class="container mt-5">
        <form action="{{ url('/user/putData') }}" method="post" autocomplete="off">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="first_name">Primeiro Nome</label>
                <input type="text" name="first_name" id="first_name" class="form-control" value="Romário">
            </div>

            <div class="form-group">
                <label for="last_name">Segundo Nome</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="Arruda">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="curso.laravel@gmail.com">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </main>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>