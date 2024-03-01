<?php

class calculadora {
    public $historico = [];

    public function somar($valor1, $valor2) {
        $resultado = $valor1 + $valor2;

        echo "<br /> Somando os valores: $valor1 e $valor2 o resultado é $resultado <br />";
        $this->addHistorico("Operação: $valor1 + $valor2 = $resultado <br />");
    }

    public function diminuir($valor1, $valor2) {
        $resultado = $valor1 - $valor2;

        echo "<br /> Subtraindo os valores: $valor1 e $valor2 o resultado é $resultado <br />";
        $this->addHistorico("Operação: $valor1 - $valor2 = $resultado <br />");
    }

    public function multiplicar($valor1, $valor2) {
        $resultado = $valor1 * $valor2;

        echo "<br /> Multiplicando os valores: $valor1 por $valor2 o resultado é $resultado <br />";
        $this->addHistorico("Operação: $valor1 x $valor2 = $resultado <br />");
    }

    public function dividir($valor1, $valor2) {
        $resultado = $valor1 / $valor2;

        echo "<br /> Dividindo os valores: $valor1 por $valor2 o resultado é $resultado <br />";
        $this->addHistorico("Operação: $valor1 / $valor2 = $resultado <br />");
    }

    public function addHistorico($dados) {
        $this->historico[] = $dados;
    }

    public function mostrarHistorico() {
        foreach ($this->historico as $key => $value) {echo "$value";}
    }

}

?>