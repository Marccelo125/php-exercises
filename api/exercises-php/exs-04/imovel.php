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