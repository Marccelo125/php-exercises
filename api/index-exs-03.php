<?php
require_once('exercises-php/exs-03/contador.php');
require_once('exercises-php/exs-03/bola.php');
require_once('exercises-php/exs-03/contaCorrente.php');
require_once('exercises-php/exs-03/calculadora.php');
require_once('exercises-php/exs-03/bombaCombustivel.php');
require_once('exercises-php/exs-03/carro.php');
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
        <div class="container-fuild text-white m-5">
            <div class="row d-flex justify-content-evenly text-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 style="color: light-blue;">N° do Exercício</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <h1 class="text-success">Resultado</h1>
                    <span>Código no GitHub <a href="https://github.com/Marccelo125/php-exercises/tree/master/api/exercises-php/exs-03" target="_blank">Clique aqui</a></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class contador
                    {
                        public $contador;

                        public function zerar()
                        {
                            $this->contador = 0;
                            echo "<br /> Valor do contador agora é: $this->contador";
                        }

                        public function incrementar()
                        {
                            $this->contador += 1;

                            echo "<br />";
                            echo "Valor do contador agora é: $this->contador";
                            echo "<br />";
                        }

                        public function valorContador()
                        {
                            echo "Valor do contador é: $this->contador";
                        }
                    }

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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class moldarBola
                    {
                        public $cor;
                        public $circunferencia;
                        public $material;

                        public function __construct($cor, $circunferencia, $material)
                        {
                            $this->cor = $cor;
                            $this->circunferencia = $circunferencia;
                            $this->material = $material;
                        }

                        public function trocarCor($novaCor)
                        {
                            $this->cor = $novaCor;
                            echo "<br /> Troquei a cor da bola para: $this->cor <br />";
                        }

                        public function mostrarCor()
                        {
                            echo "<br /> A cor da bola é: $this->cor <br />";
                        }
                    }

                    $novaBola = new moldarBola("Vermelho", "25", "Metal");

                    $novaBola->mostrarCor();
                    $novaBola->trocarCor("Azul");
                    $novaBola->mostrarCor();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class contaCorrente
                    {
                        public $numConta;
                        public $nomeCorrentista;
                        public $saldo;

                        public function __construct($numConta, $nomeCorrentista, $saldo = 0)
                        {
                            if ($saldo < 0) {
                                echo "Você não pode criar uma conta com saldo negativo";
                                return;
                            }
                            $this->numConta = $numConta;
                            $this->nomeCorrentista = $nomeCorrentista;
                            $this->saldo = $saldo;
                        }

                        public function mostrarConta()
                        {
                            echo "<br /> N° da Conta: $this->numConta";
                            echo "<br /> Nome Corretista: $this->nomeCorrentista";
                            echo "<br /> Saldo: $this->saldo";
                        }

                        public function novoNome($nome)
                        {
                            if (strlen($nome) >= 3) {
                                $this->nomeCorrentista = $nome;
                                echo "Seu nome agora é: $this->nomeCorrentista";
                            } else {
                                echo "O novo nome deve conter no minímo 3 caracteres";
                                return;
                            }
                        }

                        public function sacar($valor)
                        {
                            if ($valor > $this->saldo) {
                                echo "<br />Saldo insuficiente para saque";
                                return;
                            }
                            $this->saldo -= $valor;
                            echo "<br />Sacou: $valor";
                            echo "<br />Saldo atual: $this->saldo";
                        }

                        public function deposito($valor)
                        {
                            if ($valor > 0) {
                                $this->saldo += $valor;
                                echo "<br />Deposito: $valor";
                                echo "<br />Saldo atual: $this->saldo";
                            } else {
                                echo "O valor inserido é INVÁLIDO";
                            }
                        }
                    }

                    $novaConta = new contaCorrente(10, "Marcelo", 100);
                    $novaConta->novoNome("João");
                    $novaConta->mostrarConta();
                    $novaConta->sacar(50);
                    $novaConta->deposito(75);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class calculadora
                    {
                        public $historico = [];

                        public function somar($valor1, $valor2)
                        {
                            $resultado = $valor1 + $valor2;

                            echo "<br /> Somando os valores: $valor1 e $valor2 o resultado é $resultado <br />";
                            $this->addHistorico("Operação: $valor1 + $valor2 = $resultado <br />");
                        }

                        public function diminuir($valor1, $valor2)
                        {
                            $resultado = $valor1 - $valor2;

                            echo "<br /> Subtraindo os valores: $valor1 e $valor2 o resultado é $resultado <br />";
                            $this->addHistorico("Operação: $valor1 - $valor2 = $resultado <br />");
                        }

                        public function multiplicar($valor1, $valor2)
                        {
                            $resultado = $valor1 * $valor2;

                            echo "<br /> Multiplicando os valores: $valor1 por $valor2 o resultado é $resultado <br />";
                            $this->addHistorico("Operação: $valor1 x $valor2 = $resultado <br />");
                        }

                        public function dividir($valor1, $valor2)
                        {
                            $resultado = $valor1 / $valor2;

                            echo "<br /> Dividindo os valores: $valor1 por $valor2 o resultado é $resultado <br />";
                            $this->addHistorico("Operação: $valor1 / $valor2 = $resultado <br />");
                        }

                        public function addHistorico($dados)
                        {
                            $this->historico[] = $dados;
                        }

                        public function mostrarHistorico()
                        {
                            foreach ($this->historico as $key => $value) {
                                echo "$value";
                            }
                        }
                    }

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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class bombaCombustivel
                    {

                        public $tipoCombustivel;
                        public $valorLitro;
                        public $quantidadeCombustivel;

                        public function __construct($tipoCombustivel, $quantidadeCombustivel)
                        {

                            $this->tipoCombustivel = $tipoCombustivel;
                            $this->quantidadeCombustivel = $quantidadeCombustivel;

                            if ($this->tipoCombustivel == 'GASOLINA') {
                                $this->alterarValor(5);
                            }
                            if ($this->tipoCombustivel == 'ALCOOL') {
                                $this->alterarValor(3);
                            }
                            if ($this->tipoCombustivel == 'DIESEL') {
                                $this->alterarValor(4);
                            } else return;
                        }

                        public function abastecerPorValor($valor)
                        {
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

                        public function abastecerPorLitro($valor)
                        {
                            $total =  round($this->valorLitro * $valor, 2);
                            echo "<br /> Você deseja abastecer R$ $valor";
                            if ($this->quantidadeCombustivel >= $valor) {
                                echo "<br /> Você abasteceu $total Litros";
                                $this->quantidadeCombustivel -= $valor;
                            } else {
                                echo ". Quantidade indisponível<br>";
                            }
                        }

                        public function alterarValor($novoValor)
                        {
                            $this->valorLitro = round($novoValor, 2);
                            echo "<br /> Valor de combustível alterado para R$ $novoValor";
                        }
                        public function alterarTipoCombustivel($novoCombustivel)
                        {
                            $this->tipoCombustivel = $novoCombustivel;
                            echo "<br /> Tipo de combustível alterado para $novoCombustivel";
                        }
                        public function alterarQntdCombustivel($novaQntde)
                        {
                            $this->quantidadeCombustivel = round($novaQntde, 2);
                            echo "<br /> Quantidade de combustível total alterado para $novaQntde Litros";
                        }
                    }

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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
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
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class carro
                    {
                        public function __construct(
                            public $nomeCarro,
                            public $consumo,
                            public $combustivel = 0,
                        ) {
                            $this->nomeCarro = $nomeCarro;
                            $this->consumo = $consumo;
                            $this->combustivel = $combustivel;
                        }

                        public function andar($distancia)
                        {
                            $mediaConsumo = $this->combustivel * $this->consumo;
                            if ($mediaConsumo >= $distancia) {
                                $this->combustivel -= round($this->consumo / $distancia, 2);
                                echo "<br /> Seu carro $this->nomeCarro percorreu uma distância de: $distancia km. Seu tanque possuí $this->combustivel Litros";
                            }
                        }

                        public function obterGasolina()
                        {
                            echo "<br /> Seu carro $this->nomeCarro possuí $this->combustivel Litros diponíveis no tanque.";
                        }

                        public function adicionarGasolina($qntdDeLitros)
                        {
                            if ($qntdDeLitros > 0) {
                                $this->combustivel += $qntdDeLitros;
                                echo "<br /> Você abasteceu $qntdDeLitros Litros! Agora seu carro tem $this->combustivel litros.";
                            } else {
                                echo "<br /> Quantidade inválida";
                            }
                        }
                    }
                    
                    $novoCarro = new carro("Fusca", 10, 100);
                    $novoCarro->andar(10);
                    $novoCarro->obterGasolina();
                    $novoCarro->adicionarGasolina(50);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>