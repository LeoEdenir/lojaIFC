<?php

    require_once __DIR__."/../../models/CrudProdutos.php";
    $crud = new CrudProdutos();

    $listaProdutos = $crud->getProdutos();

    ## !!ADICIONE AQUI O CABECALHO DA PAGINA

?>

<!--Barra de busca-->
<div class="row">
    <div class="col-md-12">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="digite o nome do produto" aria-describedby="basic-addon2">
            <button class="input-group-addon" id="basic-addon2">buscar</button>
        </div>
    </div>
</div>
<br>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listaProdutos as $produto): ?>
    <tr>
        <th scope="row">mostre o código do produto</th>
        <td>##mostre o nome</td>
        <td>##mostre o preco</td>
        <td>##mostre o estoque</td>
        <td>##mostre a categoria</td>
        <td>##editar | remover</td>
    </tr>
   <?php endforeach; ?>

    </tbody>
</table>

<!-- ## ADICIONE AQUI O RODAPE DA PAGINA -->