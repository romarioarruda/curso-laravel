@extends('property.master')

@section('content')


<h3>Formulário de edição!!</h3>
<hr>

<form action="<?= url('/imoveis/atualizar') ?>" method="post">
    <?= csrf_field() ?>
    <input type="hidden" name="id" id="id" value="<?=$properties['id']?>">
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="<?=$properties['title']?>">
    </div>
    
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10"><?=$properties['description']?></textarea>
    </div>

    <div class="form-group">
        <label for="rental_price">Valor de locação</label>
        <input type="text" class="form-control" name="rental_price" id="rental_price" value="<?=$properties['rental_price']?>">
    </div>

    <div class="form-group">
        <label for="real_price">Valor de compra</label>
        <input type="text" class="form-control" name="real_price" id="real_price" value="<?=$properties['real_price']?>">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>

@endsection