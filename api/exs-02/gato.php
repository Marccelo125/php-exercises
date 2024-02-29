<?php

class gato extends Animal {
    public $apelido;
    public $personalidade;

    public function __construct($apelido, $personalidade, $tipo, $especie, $voa) {
        $this->apelido = $apelido;
        $this->personalidade = $personalidade;

        parent:: __construct($tipo, $especie, $voa);
    }

    public function miar() {
        echo "<br />";
        echo "Miauuu";
    }
}