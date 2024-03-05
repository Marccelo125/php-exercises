<?php

abstract class Ingresso {
    protected $valor = 10;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    abstract public function imprimeValor();
}

// Classe Normal que herda de Ingresso
class normal extends ingresso {
    public function imprimeValor() {
        echo "Valor do ingresso normal: R$ " . number_format($this->valor, 2, ',', '.') . "<br />";
    }
}

class vip extends ingresso {
    public function imprimeValor() {
        $valorVip = 20;
        echo "Valor do ingresso VIP: R$ " . number_format($this->valor + $valorVip, 2, ',', '.' . "<br />");
    }
}

class camarote extends ingresso {
    public function imprimeValor() {
        $valorCamarote = 40;
        echo "<br /> Valor do ingresso Camarote: R$ " . number_format($this->valor + $valorCamarote, 2, ',', '.' . "<br />");
    }
}

$ingressoNormal = new Normal(50.00);
$ingressoNormal->imprimeValor();


$ingressoVIP = new Vip(50.00);
$ingressoVIP->imprimeValor();

$ingressoCamarote = new camarote(50.00);
$ingressoCamarote->imprimeValor();