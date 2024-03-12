<?php


class Pedido {
    public $itens;
    public $valorTotal;

    public function __construct(){
        $this->itens = array();      
    }

    public function adicionarItem(...$data) {
        $this->itens = [...$this->itens, ...$data];
    }

    public function mostrarPedido() {
        echo "PEDIDO: <br />";
        foreach ($this->itens as $item) {
            echo "Item: $item->nome <br />";
            echo "Descrição: $item->descricao <br />";
            echo "Preço: R$ $item->valor <br />";
            echo "<hr>";
        }
    }

    public function valorTotal() {
        foreach ($this->itens as $item) {
            $this->valorTotal += $item->valor;
        }
        echo "Valor Total da compra: R$ {$this->valorTotal}";
    }
}