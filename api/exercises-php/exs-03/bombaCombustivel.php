<?php
class bombaCombustivel {
    
    public $tipoCombustivel;
    public $valorLitro;
    public $quantidadeCombustivel;

    public function __construct($tipoCombustivel, $quantidadeCombustivel) {
        
        $this->tipoCombustivel = $tipoCombustivel;
        $this->quantidadeCombustivel = $quantidadeCombustivel;
        
        if ($this->tipoCombustivel == 'GASOLINA') {$this->alterarValor(5);}
        if ($this->tipoCombustivel == 'ALCOOL') {$this->alterarValor(3);}
        if ($this->tipoCombustivel == 'DIESEL') {$this->alterarValor(4);}
        else return;
        
    }

    public function abastecerPorValor($valor) {
        if ($valor > 0) {
            $total = round($valor / $this->valorLitro, 2);
            echo "<br /> Você deseja abastecer R$ $valor";

            if ($this->quantidadeCombustivel >= $total) {
                echo "<br /> Você abasteceu $total Litros";
                $this->quantidadeCombustivel -= $total;
            } else {
                echo "Quantidade indisponível <br />";
            }

        }
    }

    public function abastecerPorLitro($valor) {
        $total =  round($this->valorLitro * $valor, 2);
        echo "<br /> Você deseja abastecer R$ $valor";
        if ($this->quantidadeCombustivel >= $valor) {
            echo "<br /> Você abasteceu $total Litros";
            $this->quantidadeCombustivel -= $valor;
        } else {
            echo ". Quantidade indisponível<br>";
        }
    }

    public function alterarValor($novoValor) {
        $this->valorLitro = round($novoValor, 2);
        echo "<br /> Valor de combustível alterado para R$ $novoValor";
    }
    public function alterarTipoCombustivel($novoCombustivel) {
        $this->tipoCombustivel = $novoCombustivel;
        echo "<br /> Tipo de combustível alterado para $novoCombustivel";
    }
    public function alterarQntdCombustivel($novaQntde) {
        $this->quantidadeCombustivel = round($novaQntde, 2);
        echo "<br /> Quantidade de combustível total alterado para $novaQntde Litros";
    }
}
