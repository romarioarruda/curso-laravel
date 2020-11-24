@extends('property.master')

@section('content')


<h3>Formulário de cadastro!!</h3>
<hr>

<form action="<?= url('/imoveis/cadastrar') ?>" method="post">
    <?= csrf_field() ?>

    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
    </div>
    
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10"></textarea>
    </div>
    
    <div class="form-group">
        <label for="rental_price">Valor de locação</label>
        <input type="text" class="form-control" name="rental_price" id="rental_price">
    </div>
    
    <div class="form-group">
        <label for="real_price">Valor de compra</label>
        <input type="text" class="form-control" name="real_price" id="real_price">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

@endsection