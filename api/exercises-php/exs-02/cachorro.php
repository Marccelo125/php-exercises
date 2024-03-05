<?php

class cachorro1 extends Animal1 {
    public $nome;

    public function __construct($nome, $tipo, $especie, $voa) {
        $this->nome = $nome;
        
        parent::__construct($tipo, $especie, $voa);
    }

    public function latir() {
        echo "<br />";
        echo "Auauuuu...";
    }
}
    