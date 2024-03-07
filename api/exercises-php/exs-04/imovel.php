<?php

class imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getPreco() {
        return $this->preco;
    }
}

class Novo extends Imovel {
    private $adicionalPreco;

    public function __construct($endereco, $preco, $adicionalPreco) {
        parent::__construct($endereco, $preco);
        $this->adicionalPreco = $adicionalPreco;
    }

    public function getAdicionalPreco() {
        return $this->adicionalPreco;
    }

    public function imprimeAdicionalPreco() {
        echo "Adicional no preço: R$ " . number_format($this->adicionalPreco, 2, ',', '.') . "<br />";
    }

    public function getPrecoTotal() {
        return $this->preco + $this->adicionalPreco;
    }
}

class Velho extends Imovel {
    private $descontoPreco;

    public function __construct($endereco, $preco, $descontoPreco) {
        parent::__construct($endereco, $preco);
        $this->descontoPreco = $descontoPreco;
    }

    public function getDescontoPreco() {
        return $this->descontoPreco;
    }

    public function imprimeDescontoPreco() {
        echo "Desconto no preço: R$ " . number_format($this->descontoPreco, 2, ',', '.') . "<br />";
    }

    public function getPrecoTotal() {
        return $this->preco - $this->descontoPreco;
    }
}

// Novo
$imovelNovo = new Novo("Ganton, Los Santos, San Andreas.", 200000, 10000);

echo "Endereço do imóvel: " . $imovelNovo->getEndereco() . "<br />";
echo "Preço do imóvel: R$ " . number_format($imovelNovo->getPreco(), 2, ',', '.') . "<br />";

$imovelNovo->imprimeAdicionalPreco();
echo "Preço total do imóvel: R$ " . number_format($imovelNovo->getPrecoTotal(), 2, ',', '.') . "<br />";

echo "<hr>";

// Velho
$imovelVelho = new Velho("Forum Drive, Strawberry.", 150000, 25000);

echo "Endereço do imóvel: " . $imovelVelho->getEndereco() . "<br />";
echo "Preço do imóvel: R$ " . number_format($imovelVelho->getPreco(), 2, ',', '.') . "<br />";

$imovelVelho->imprimeDescontoPreco();
echo "Preço total do imóvel: R$ " . number_format($imovelVelho->getPrecoTotal(), 2, ',', '.') . "<br />";
