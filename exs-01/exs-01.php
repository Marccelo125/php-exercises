<?php
    // Exercício 01
    echo 'Exercício 01<br />';
    $resultado = array();

    $num1 = 1;
    $num2 = 10;

    function calcularMedia($num1, $num2) {
        global $resultado;

        $media = ($num1 + $num2) / 2;
        $aprovado = false;

        if ($media >= 6) {
            $aprovado = true;
        }

        array_push($resultado, array(
            'media' => $media,
            'resumo' => $aprovado
        ));
    }
    calcularMedia($num1, $num2);
    var_dump($resultado);

    // Exercício 02
    echo 'Exercício 02 <br />';

    $notaPeso = array(
        [
            'nota' => 1,
            'peso' => 1
        ],
        [
            'nota' => 1,
            'peso' => 1
        ],
        [
            'nota' => 1,
            'peso' => 10
        ]
    );

    $mediaFinal = 0;

    function calcularPesoNota($lista) {
        global $mediaFinal;
        // Pegamos a média final que é global
        $multiplicacao = 0;
        // Criamos uma variavel para armazenar o resultado
        // das multiplicações

        foreach ($lista as $key => $value) {
            $multiplicacao += $value['nota'] * $value['peso'];
            // Utilizamos forEach que coleta a nota e peso e os multiplica
            // somando com o que já estiver em multiplicação ('+=')
        }

        return $mediaFinal = $multiplicacao / count($lista);
        // Retornamos para a mediaFinal o resultado da soma de todas multiplicações
        // divididas pelo total de elementos na lista
    }

    calcularPesoNota($notaPeso);
    echo $mediaFinal;

    // Exercício 03
    echo ' <br /> Exercício 03';

    $listaProdutos = array();

    function cadastrarProduto($nome, $preco) {
        global $listaProdutos;

        array_push($listaProdutos, array(
            "nome" => $nome,
            "preco" => $preco
        ));
    }

    function listarProdutos() {
        global $listaProdutos;

        foreach ($listaProdutos as $key => $value) {
            echo "<h4> Nome:" . $value['nome'] . "</h4>";
            echo "<h4> Preço: R$" . $value['preco'] . "</h4>";
            echo "<hr />";
        }
    }

    function excluirProduto($nome) {
        global $listaProdutos;

        foreach ($listaProdutos as $key => $value) {
            if ($value['nome'] == $nome) {
                unset($listaProdutos[$key]);
            }
        }
    }

    cadastrarProduto("Maçã", 3);
    cadastrarProduto("Pêra", 5);
    cadastrarProduto("Refri 3L", 12);
    
    listarProdutos();
    excluirProduto('maça');
    listarProdutos()
?>