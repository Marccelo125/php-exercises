<?php

class contaCorrente {
    public $numConta;
    public $nomeCorrentista;
    public $saldo;

    public function __construct($numConta, $nomeCorrentista, $saldo = 0) {
        if($saldo < 0) {
            echo "Você não pode criar uma conta com saldo negativo"; 
            return;
        }
        $this -> numConta = $numConta;
        $this -> nomeCorrentista = $nomeCorrentista;
        $this -> saldo = $saldo;
    }

    public function mostrarConta() {
        echo "<br /> N° da Conta: $this->numConta";
        echo "<br /> Nome Corretista: $this->nomeCorrentista";
        echo "<br /> Saldo: $this->saldo";
    }

    public function novoNome($nome) {
        if (strlen($nome) >= 3) {
            $this->nomeCorrentista = $nome;
            echo "Seu nome agora é: $this->nomeCorrentista";
        } else {
            echo "O novo nome deve conter no minímo 3 caracteres";
            return;
        }
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "<br />Saldo insuficiente para saque";
            return;
        }
        $this->saldo -= $valor;
        echo "<br />Sacou: $valor";
        echo "<br />Saldo atual: $this->saldo";
    }

    public function deposito($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "<br />Deposito: $valor";
            echo "<br />Saldo atual: $this->saldo";
        } else {
            echo "O valor inserido é INVÁLIDO";
        }
    }
}
?>