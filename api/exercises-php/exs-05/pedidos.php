<?php

require_once("./item.php");

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


$cachorroQuente = new Item(10, "Cachorro Quente", "Não é um cachorro mas é quente");
$batata = new Item(4, "Batata", "POTATO!");
$melao = new Item(8, "Melão Quente", "Me vê um Milão");
$novoPedido = new Pedido();
$novoPedido->adicionarItem($cachorroQuente, $batata, $melao);
$novoPedido->mostrarPedido();
$novoPedido->valorTotal();
