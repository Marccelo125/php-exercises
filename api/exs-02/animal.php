<?php

class animal {
    public $tipo;
    public $especie;
    public $voa;

    public function __construct($tipo, $especie, $voa) {
        $this-> tipo = $tipo;
        $this-> especie = $especie;
        $this-> voa = $voa;
    }

    public function voar() {
        if ($this->voa) {
            echo "Voando...";
        } else {
            echo "Este animal não voa.";
        }
    }

    public function mostrarDetalhe() {
        echo "Detalhe do meu animal";
        echo "<hr />";
        echo "Tipo: $this->tipo";
        echo "<br />";
        echo "Especie: $this->especie";
        echo "<br />";
        
        $voa = "sim";
        
        $voa = $this->voa ? "Voa: Este animal voa" : "Voa: Este animal não voa";
        echo $voa;
        echo "<br />";
    }
}