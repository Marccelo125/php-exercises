<?php
require('https://php-exercises.vercel.app/api/exercises-php/exs-03/contador.php');
require('https://php-exercises.vercel.app/api/exercises-php/exs-03/bola.php');
require('https://php-exercises.vercel.app/api/exercises-php/exs-03/contaCorrente.php');
require('https://php-exercises.vercel.app/api/exercises-php/exs-03/calculadora.php');
require('https://php-exercises.vercel.app/api/exercises-php/exs-03/bombaCombustivel.php');
require('https://php-exercises.vercel.app/api/exercises-php/exs-03//carro.php');
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark p-2">
    <main>
        <div class="container-fuild text-white m-5 ">
            <div class="row  d-flex justify-content-evenly text-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 style="color: light-blue;">N° do Exercício</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 class="text-success">Resultado</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 01</h3>
                    <p>
                        Crie uma classe Contador, que encapsule um valor usado para
                        contagem de itens ou eventos.
                        <strong>A classe deve oferecer métodos que devem:</strong>
                    <ol>
                        <li>Zerar.</li>
                        <li>Incrementar.</li>
                        <li>Retornar o valor do contador.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                    $meuContador = new contador();

                    $meuContador->incrementar();
                    $meuContador->incrementar();
                    $meuContador->incrementar();

                    $meuContador->valorContador();
                    $meuContador->zerar();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 02</h3>
                    <p>
                        Crie uma classe que modele uma bola: <br />
                        <strong>Atributos</strong>
                    <ol>
                        <li>Cor.</li>
                        <li>Circunferência.</li>
                        <li>Material.</li>
                    </ol>
                    <strong>Métodos</strong>
                    <ol>
                        <li>Trocar Cor.</li>
                        <li>Mostrar Cor.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                    $novaBola = new moldarBola("Vermelho", "25", "Metal");

                    $novaBola->mostrarCor();
                    $novaBola->trocarCor("Azul");
                    $novaBola->mostrarCor();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 03</h3>
                    <p>
                        Crie uma classe para implementar uma conta corrente. A classe
                        deve possuir os seguintes <strong>Atributos</strong>: <br />
                    <ol>
                        <li>Número da conta.</li>
                        <li>Nome do correntista.</li>
                        <li>Saldo.</li>
                    </ol>
                    <strong>Os métodos são os seguintes:</strong>
                    <ol>
                        <li>Alterar nome.</li>
                        <li>Deposito.</li>
                        <li>Saque.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                    $novaConta = new contaCorrente(10, "Marcelo", 100);
                    $novaConta->novoNome("João");
                    $novaConta->mostrarConta();
                    $novaConta->sacar(50);
                    $novaConta->deposito(75);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 04</h3>
                    <p>
                        Crie uma classe para representar uma Calculadora. Esta classe
                        deve conter um atributo que servirá para armazenar o histórico das
                        operações e seus respectivos resultados.<br />
                    <ol>
                        <li>Esta classe deve conter as operações de somar, multiplicar,
                            dividir e diminuir.</li>
                        <li>Esta classe deve iniciar com o histórico vazio</li>
                        <li>Esta classe deve conter uma ação para visualizar o histórico.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                    $novoCalculo = new  calculadora();
                    $novoCalculo->somar(1, 2);
                    $novoCalculo->diminuir(2, 1);
                    $novoCalculo->multiplicar(10, 10);
                    $novoCalculo->dividir(10, 2);
                    $novoCalculo->mostrarHistorico();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 05</h3>
                    <p>
                        Faça um programa completo utilizando classes e métodos que:<br /> <br />
                        <strong>Possua uma classe chamada BombaCombustivel, com no mínimo esses atributos:</strong>
                    <ol>
                        <li>tipoCombustivel.</li>
                        <li>tipoCombustivel.</li>
                        <li>quantidadeCombustivel.</li>
                    </ol>
                    <strong>Possua no mínimo esses métodos:</strong>
                    <ol>
                        <li>abastecerPorValor() – método onde é informado o
                            valor a ser abastecido e mostra a quantidade de litros
                            que foi colocada no veículo.</li>
                        <li>abastecerPorLitro() – método onde é informado a
                            quantidade em litros de combustível e mostra o valor a
                            ser pago pelo cliente.</li>
                        <li>alterarValor() – altera o valor do litro do combustível.</li>
                        <li>alterarCombustivel() – altera o tipo do combustível.</li>
                        <li>alterarQuantidadeCombustivel() – altera a
                            quantidade de combustível restante na bomba.</li>
                    </ol>
                    <span>OBS: Sempre que acontecer um abastecimento é necessário
                        atualizar a quantidade de combustível total na bomba. Não deve ser
                        possível abastecer se não tiver gasolina suficiente na bomba.</span>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                    $novaBomba = new bombaCombustivel("GASOLINA", 10000);
                    $novaBomba->abastecerPorValor(50);
                    $novaBomba->abastecerPorLitro(50);

                    $novaBomba->alterarValor(50);
                    $novaBomba->alterarTipoCombustivel("DIESEL");
                    $novaBomba->alterarQntdCombustivel(30);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <h3 class="text-warning">Exercício 06</h3>
                    <p>
                        Implemente uma classe chamada Carro com as seguintes
                        propriedades:<br /> <br />
                    <ol>
                        <li>Um veículo tem um certo consumo de combustível (medidos
                            em km / litro) e uma certa quantidade de combustível no
                            tanque.</li>
                        <li>O consumo é especificado no construtor e o nível de
                            combustível inicial é 0..</li>
                        <li>Forneça um método andar() que simula o ato de dirigir o
                            veículo por uma certa distância, reduzindo o nível de
                            combustível no tanque de gasolina.</li>
                        <li>Forneça um método obterGasolina(), que retorna o nível atual
                            de combustível e forneça um método adicionarGasolina(),
                            para abastecer o tanque.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow border p-4" style="max-height: 75vh;">
                    <?php
                        $novoCarro = new carro("Fusca", 10, 100);
                        $novoCarro -> andar(10);
                        $novoCarro -> obterGasolina();
                        $novoCarro -> adicionarGasolina(50);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>