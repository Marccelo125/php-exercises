<?php

class Item {
    public $valor;
    public $nome;
    public $descricao;

    public function __construct($valor, $nome, $descricao = "") {
        $this->valor = $valor;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }
}