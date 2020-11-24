@extends('property.master')

@section('content')

<h3>Lista de dados</h3>
<hr>
<?php
if(count($properties) <=0) {
    echo "<h4>Lista vazia.</h4>";
    exit;
}

?>
<table class="table table-striped table-hover">
    <thead class="bg-primary text-white">
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Desc</th>
            <th>Aluguel</th>
            <th>Venda</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($properties as $property):
            
            $linkEdit = url("/imoveis/editar/$property->id");
            $linkExcluir = url("/imoveis/excluir/$property->id");
        ?>
            <tr>
                <td><?=$property->id?></td>
                <td><?=$property->title?></td>
                <td><?=$property->description?></td>
                <td><?=$property->rental_price?></td>
                <td><?=$property->real_price?></td>
                <td>
                    <a class="btn btn-primary" href="<?=$linkEdit?>">Editar</a>
                    <a class="btn btn-danger" href="<?=$linkExcluir?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

@endsection