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
                    <span>Código no GitHub <a href="https://github.com/Marccelo125/php-exercises/tree/master/api/exercises-php/exs-01" target="_blank">Clique aqui</a></span>
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
                    // Exercício 01
                    echo 'Exercício 01<br />';
                    $resultado = array();

                    $num1 = 1;
                    $num2 = 10;

                    function calcularMedia($num1, $num2)
                    {
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
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 02</h3>
                    <p>
                        Exercitando criação de classes
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php // Exercício 02
                    echo '<br /> Exercício 02 <br />';

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

                    function calcularPesoNota($lista)
                    {
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
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 03</h3>
                    <p>
                        Exercitando criação de classes
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    // Exercício 03
                    echo ' <br /> Exercício 03';

                    $listaProdutos = array();

                    function cadastrarProduto($nome, $preco)
                    {
                        global $listaProdutos;

                        array_push($listaProdutos, array(
                            "nome" => $nome,
                            "preco" => $preco
                        ));
                    }

                    function listarProdutos()
                    {
                        global $listaProdutos;

                        foreach ($listaProdutos as $key => $value) {
                            echo "<h4> Nome:" . $value['nome'] . "</h4>";
                            echo "<h4> Preço: R$" . $value['preco'] . "</h4>";
                            echo "<hr />";
                        }
                    }

                    function excluirProduto($nome)
                    {
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
                    echo "<br /> Excluindo produtos <br />";
                    excluirProduto('Maçã');
                    listarProdutos()
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>