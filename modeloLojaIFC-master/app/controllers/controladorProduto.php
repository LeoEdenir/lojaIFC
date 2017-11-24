<?php

// O Controlador é a peça de código que sabe qual classe chamar, para onde redirecionar e etc.
// Use o método $_GET para obter informações vindas de outras páginas.



//faça um require_once para o arquivo Produto.php
//faça um require_once para o arquivo CrudProduto.php
require_once "produto.php";
require_once "CrudProduto.php";





//quando um valor da URL for igual a cadastrar faça isso
if (? == 'cadastrar'){

    $produto = //novo produto;
    //crie um objeto $crud
    $crud->salvar($produto);

    //redirecione para a página de produtos
}

//quando um valor da URL for igual a editar faça isso
if ( ? == 'editar'){

    //algoritmo para editar
    //redirecione para a página de produtos
}

//quando um valor da URL for igual a excluir faça isso
if ( ? == 'excluir'){

    //algoritmo para excluir
    //redirecione para a página de produtos
}