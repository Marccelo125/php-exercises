<?php
require('exercises-php/exs-03/contador.php');
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
                    <span>Código no GitHub <a href="https://github.com/Marccelo125/php-exercises/tree/master/api/exercises-php/exs-04" target="_blank">Clique aqui</a></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 01</h3>
                    <p>
                        Crie uma classe abstrata chamada Ingresso que possui um valor
                        em reais e um método <code>imprimeValor()</code>
                    <ol>
                        <li>Crie uma classe Normal, que herda Ingresso..</li>
                        <li>Crie uma classe VIP, que herda Ingresso e possui um valor
                            adicional. Altere o método imprimeValor para mostrar o valor
                            do ingresso somado com o adicional.</li>
                        <li>Crie uma classe Camarote, que herda ingresso e possui um
                            valor adicional. Altere o método imprimeValor para mostrar o
                            valor do ingresso somado com o adicional.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php

                    abstract class Ingresso
                    {
                        protected $valor = 10;

                        public function __construct($valor)
                        {
                            $this->valor = $valor;
                        }

                        abstract public function imprimeValor();
                    }

                    // Classe Normal que herda de Ingresso
                    class normal extends ingresso
                    {
                        public function imprimeValor()
                        {
                            echo "Valor do ingresso normal: R$ " . number_format($this->valor, 2, ',', '.') . "<br />";
                        }
                    }

                    class vip extends ingresso
                    {
                        public function imprimeValor()
                        {
                            $valorVip = 20;
                            echo "Valor do ingresso VIP: R$ " . number_format($this->valor + $valorVip, 2, ',', '.' . "<br />");
                        }
                    }

                    class Camarote extends ingresso
                    {
                        public function imprimeValor()
                        {
                            $valorCamarote = 40;
                            echo "<br /> Valor do ingresso Camarote: R$ " . number_format($this->valor + $valorCamarote, 2, ',', '.' . "<br />");
                        }
                    }

                    $ingressoNormal = new Normal(50.00);
                    $ingressoNormal->imprimeValor();


                    $ingressoVIP = new Vip(50.00);
                    $ingressoVIP->imprimeValor();

                    $ingressoCamarote = new Camarote(50.00);
                    $ingressoCamarote->imprimeValor();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 02</h3>
                    <p>
                        Crie a classe Imovel, que possui um endereço e um preço.
                    <ol>
                        <li>crie uma classe Novo, que herda Imovel e possui um adicional
                            no preço. Crie métodos de acesso e impressão deste valor
                            adicional.</li>
                        <li>crie uma classe Velho, que herda Imovel e possui um desconto
                            no preço. Crie métodos de acesso e impressão para este
                            desconto.</li>
                    </ol>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php

                    class imovel
                    {
                        protected $endereco;
                        protected $preco;

                        public function __construct($endereco, $preco)
                        {
                            $this->endereco = $endereco;
                            $this->preco = $preco;
                        }

                        public function getEndereco()
                        {
                            return $this->endereco;
                        }

                        public function getPreco()
                        {
                            return $this->preco;
                        }
                    }

                    class Novo extends Imovel
                    {
                        private $adicionalPreco;

                        public function __construct($endereco, $preco, $adicionalPreco)
                        {
                            parent::__construct($endereco, $preco);
                            $this->adicionalPreco = $adicionalPreco;
                        }

                        public function getAdicionalPreco()
                        {
                            return $this->adicionalPreco;
                        }

                        public function imprimeAdicionalPreco()
                        {
                            echo "Adicional no preço: R$ " . number_format($this->adicionalPreco, 2, ',', '.') . "<br />";
                        }

                        public function getPrecoTotal()
                        {
                            return $this->preco + $this->adicionalPreco;
                        }
                    }

                    class Velho extends Imovel
                    {
                        private $descontoPreco;

                        public function __construct($endereco, $preco, $descontoPreco)
                        {
                            parent::__construct($endereco, $preco);
                            $this->descontoPreco = $descontoPreco;
                        }

                        public function getDescontoPreco()
                        {
                            return $this->descontoPreco;
                        }

                        public function imprimeDescontoPreco()
                        {
                            echo "Desconto no preço: R$ " . number_format($this->descontoPreco, 2, ',', '.') . "<br />";
                        }

                        public function getPrecoTotal()
                        {
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
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 03</h3>
                    <p>
                        <code>Animal -> Cavalo, Gato e Cachorro. <br /></code>
                        Identifique os atributos e comportamentos que são comuns entre os
                        3 animais e encapsule-os na superclasse <code>Animal</code>. Crie pelo menos 1
                        comportamento diferente para cada animal.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php

                    class Animal
                    {
                        protected $nome;
                        protected $idade;
                        protected $voa;

                        public function __construct($nome, $idade, $voa)
                        {
                            $this->nome = $nome;
                            $this->idade = $idade;
                            $this->voa = $voa;
                        }

                        // Métodos de acesso
                        public function getNome()
                        {
                            return $this->nome;
                        }

                        public function getIdade()
                        {
                            return $this->idade;
                        }

                        public function voar()
                        {
                            if ($this->voa) {
                                echo "Voando... <br />";
                            } else {
                                echo "Este animal não voa. <br />";
                            }
                        }
                    }

                    class Cachorro extends Animal
                    {
                        public function late()
                        {
                            echo "O cachorro late: Au Au! <br />";
                        }
                    }

                    class Gato extends Animal
                    {
                        public function mia()
                        {
                            echo "O gato mia: Miau Miau! <br />";
                        }
                    }

                    class Cavalo extends Animal
                    {
                        public function relincha()
                        {
                            echo "O cavalo relincha: Hiiiiin! <br />";
                        }
                    }

                    $cachorro = new Cachorro("Tininha", 5, false);
                    echo "Nome do cachorro: " . $cachorro->getNome() . "<br />";
                    echo "Idade do cachorro: " . $cachorro->getIdade() . " anos" . "<br />";
                    $cachorro->voar();
                    $cachorro->late();

                    echo "<hr>";

                    $gato = new Gato("Pudim", 1, false);
                    echo "Nome do gato: " . $gato->getNome() . "<br />";
                    echo "Idade do gato: " . $gato->getIdade() . " anos" . "<br />";
                    $gato->voar();
                    $gato->mia();

                    echo "<hr>";

                    $cavalo = new Cavalo("Trovão", 12, false);
                    echo "Nome do cavalo: " . $cavalo->getNome() . "<br />";
                    echo "Idade do cavalo: " . $cavalo->getIdade() . " anos" . "<br />";
                    $cavalo->voar();
                    $cavalo->relincha();

                    ?>

                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>