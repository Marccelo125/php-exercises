<?php

abstract class formatoDoElemento {
    abstract public function desenhar();
    abstract public function redimensionar($raio, $comprimento, $altura);
}

class Retangulo extends formatoDoElemento {
    public $comprimento;
    public $altura;

    public function __construct($comprimento, $altura) {
        $this->comprimento = $comprimento;
        $this->altura = $altura;
    }

    public function desenhar() {
        $areaTotal = $this->comprimento * $this->altura;
        $printComprimento = str_repeat("🟥", $this->comprimento);
    
        for ($i = 0; $i < $this->altura; $i++) {
            echo $printComprimento . "<br />";
        }

        echo "<br /> Comprimento: {$this->comprimento} <br />";
        echo "Altura: {$this->altura} <br />";
        echo "Área: $areaTotal <br />";
    }

    public function redimensionar($comprimento, $altura, $raio = 0) {
        $this->comprimento = $comprimento;
        $this->altura = $altura;
    }
}

class Circulo extends formatoDoElemento {
    public $raio;

    public function __construct($raio) {
        $this->raio = $raio;
    }

    public function desenhar() {
        $areaTotal = pi() * pow($this->raio, 2);
        $raioPow = pow($this->raio, 2);
        
        echo "<div style='width:{$raioPow}; height:{$raioPow}; border-radius:50%; background-color:red'></div> <br />";

        echo "<br /> Raio: {$this->raio} <br />";
        echo "Área: $areaTotal <br />";
    }

    public function redimensionar($raio, $comprimento = 0, $altura = 0) {
        $this->raio = $raio;
    }
}