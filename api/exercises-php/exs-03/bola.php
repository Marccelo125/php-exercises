<?php

class moldarBola {
    public $cor;
    public $circunferencia;
    public $material;

    public function __construct($cor, $circunferencia, $material) {
        $this -> cor = $cor;
        $this -> circunferencia = $circunferencia;
        $this -> material = $material;
    }

    public function trocarCor($novaCor) {
        $this -> cor = $novaCor;
        echo "<br /> Troquei a cor da bola para: $this->cor <br />";
    }

    public function mostrarCor() {
        echo "<br /> A cor da bola é: $this->cor <br />";
    }
}

?>