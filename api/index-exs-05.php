<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - PHP</title>
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
                    <span>Código no GitHub <a href="https://github.com/Marccelo125/php-exercises/tree/master/api/exercises-php/exs-05" target="_blank">Clique aqui</a></span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 01</h3>
                    <p>
                        Implemente e teste o modelo de classes com base na seguinte
                        imagem:
                        <img src="./exercises-php/exs-05/ex05-poo-01.png" width="100%">
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    require_once('./exercises-php/exs-05/item.php');
                    require_once('./exercises-php/exs-05/pedidos.php');

                    $cachorroQuente = new Item(10, "Cachorro Quente", "Não é um cachorro mas é quente");
                    $batata = new Item(4, "Batata", "POTATO!");
                    $melao = new Item(8, "Melão Quente", "Me vê um Milão");
                    $novoPedido = new Pedido();
                    $novoPedido->adicionarItem($cachorroQuente, $batata, $melao);
                    $novoPedido->mostrarPedido();
                    $novoPedido->valorTotal();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 02</h3>
                    <p>
                        Implemente e teste o modelo de classes com base no seguinte
                        imagem:
                        <img src="./exercises-php/exs-05/ex05-poo-02.png" width="100%">
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <?php
                    require_once('./exercises-php/exs-05/formatoDeElemento.php');
                    $retangulo = new Retangulo(5, 10);
                    $retangulo->desenhar();
                    $retangulo->redimensionar(10, 10);
                    $retangulo->desenhar();

                    $circulo = new Circulo(5);
                    $circulo->desenhar();
                    $circulo->redimensionar(8);
                    $circulo->desenhar();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 03</h3>
                    <p>
                        Crie o diagrama de classe da atividade 3 da lista de atividades
                        sobre <strong>Pilares POO e Composição.</strong>
                        <img src="./exercises-php/exs-05/ex05-poo-03.png" width="100%">
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3>Para acessar o diagrama completo</h3>
                    <h5><a href="https://drive.google.com/file/d/1m3b4SomIb0_5xuKSxef2TJHSrVa1Rp7q/view?usp=sharing" target="_blank">Clique aqui</a></h5>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3 class="text-warning">Exercício 04</h3>
                    <p>
                        Chegou a hora de mostrar o quanto você sabe colocar no papel (ou
                        code) o que pensa. Você deve pensar, modelar, programar e testar
                        um modelo de classes baseado em uma situação da vida real. <code>Ex:
                            Locação de livros, restaurante...</code>
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 my-2 overflow-auto shadow p-4" style="max-height: 75vh; border: 2px solid #1c1c1c">
                    <h3>Para acessar o diagrama completo</h3>
                    <h5><a href="https://drive.google.com/file/d/1F987vGKYQktIH5Zr4579cwcazk7WB46R/view?usp=sharing" target="_blank">Clique aqui</a></h5>
                    <hr>
                    <?php
                    require_once('./exercises-php/exs-05/Medico.php');
                    require_once('./exercises-php/exs-05/Paciente.php');

                    $medico = new Medico("Dr. Smith", "Cardiologista");

                    $paciente1 = new Paciente("Alice", 30);
                    $paciente2 = new Paciente("Bob", 45);

                    $medico->adicionarPaciente($paciente1);
                    $medico->adicionarPaciente($paciente2);

                    $paciente1->cadastrarHistorico("Consulta inicial");
                    $paciente2->cadastrarHistorico("Exame de sangue");

                    $paciente1->atualizarHistorico(0, "Tratamento prescrito");
                    $paciente2->mostrarHistorico();

                    $medico->listarPacientes();
                    $medico->getHistorico();

                    $paciente2->deletarHistorico(0);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>