<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $codigo;
    public $nome;
    public $preco;
    public $categoria;
    public $quantidade_estoque = 0;

    public function __construct($nome, $preco, $categoria, $estoque, $codigo = null){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->categoria = $categoria;
        $this->quantidade_estoque = $estoque;
    }

    public function getDisponibilidade(){

        if ($this->quantidade_estoque > 0){
            return "Disponível";
        }else{
            return "Indisponível";
        }

    }



}