<?php
require_once('./exercises-php/exs-02/animal.php');
require_once('./exercises-php/exs-02/cachorro.php');
require_once('./exercises-php/exs-02/gato.php');
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
                    <span>Código no GitHub <a href="https://github.com/Marccelo125/php-exercises/tree/master/api/exercises-php/exs-02" target="_blank">Clique aqui</a></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 01</h3>
                    <p>
                        Exercitando criação de classes
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    class animal1
                    {
                        public $tipo;
                        public $especie;
                        public $voa;

                        public function __construct($tipo, $especie, $voa)
                        {
                            $this->tipo = $tipo;
                            $this->especie = $especie;
                            $this->voa = $voa;
                        }

                        public function voar()
                        {
                            if ($this->voa) {
                                echo "Voando...";
                            } else {
                                echo "Este animal não voa.";
                            }
                        }

                        public function mostrarDetalhe()
                        {
                            echo "Detalhe do meu animal";
                            echo "<hr />";
                            echo "Tipo: $this->tipo";
                            echo "<br />";
                            echo "Especie: $this->especie";
                            echo "<br />";

                            $voa = "sim";

                            $voa = $this->voa ? "Voa: Este animal voa" : "Voa: Este animal não voa";
                            echo $voa;
                            echo "<br />";
                        }
                    }

                    class cachorro1 extends Animal1
                    {
                        public $nome;

                        public function __construct($nome, $tipo, $especie, $voa)
                        {
                            $this->nome = $nome;

                            parent::__construct($tipo, $especie, $voa);
                        }

                        public function latir()
                        {
                            echo "<br />";
                            echo "Auauuuu...";
                        }
                    }

                    class gato1 extends Animal1
                    {
                        public $apelido;
                        public $personalidade;

                        public function __construct($apelido, $personalidade, $tipo, $especie, $voa)
                        {
                            $this->apelido = $apelido;
                            $this->personalidade = $personalidade;

                            parent::__construct($tipo, $especie, $voa);
                        }

                        public function miar()
                        {
                            echo "<br />";
                            echo "Miauuu";
                        }
                    }


                    $animal = new Animal1("carnivoro", "dinossauro", false);
                    $animal2 = new Animal1("herbívoro", "ave", true);

                    $animal->mostrarDetalhe();
                    echo "<br />";
                    $animal2->mostrarDetalhe();

                    $luly = new cachorro1("Luly", "Carnivoro", "Vira-lata", false);

                    echo $luly->mostrarDetalhe();
                    echo "Nome: $luly->nome";

                    $luly->latir();

                    $pudim = new gato1("Pupu", "Preguiçoso", "Carnivoro", "Vira-lata", false);

                    echo $pudim->mostrarDetalhe();
                    echo "Nome: $pudim->apelido";

                    echo $pudim->miar();
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>