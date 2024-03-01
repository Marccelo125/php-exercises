<?php

class carro {
    public function __construct(
        public $nomeCarro,
        public $consumo,
        public $combustivel = 0,
        ) {
        $this->nomeCarro = $nomeCarro;
        $this->consumo = $consumo;
        $this->combustivel = $combustivel;
    }

    public function andar($distancia) {
        $mediaConsumo = $this->combustivel * $this->consumo;
        if ($mediaConsumo >= $distancia) {
            $this->combustivel -= round($this->consumo / $distancia, 2);
            echo "<br /> Seu carro $this->nomeCarro percorreu uma distância de: $distancia km. Seu tanque possuí $this->combustivel Litros";
        }
    }

    public function obterGasolina() {
        echo "<br /> Seu carro $this->nomeCarro possuí $this->combustivel Litros diponíveis no tanque.";
    }

    public function adicionarGasolina($qntdDeLitros){
        if ($qntdDeLitros > 0) {
            $this->combustivel += $qntdDeLitros;
            echo "<br /> Você abasteceu $qntdDeLitros Litros! Agora seu carro tem $this->combustivel litros.";
        } else {
            echo "<br /> Quantidade inválida";
        }
    }
}

?>