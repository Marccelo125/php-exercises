<?php

require('/api/exercises-php/exs-02/animal.php');
require('/api/exercises-php/exs-02/cachorro.php');
require('/api/exercises-php/exs-02/gato.php');

$animal = new Animal("carnivoro", "dinossauro", false);
$animal2 = new Animal("herbívoro", "ave", true);

$animal->mostrarDetalhe();
echo "<br />";
$animal2->mostrarDetalhe();

$luly = new cachorro("Luly", "Carnivoro", "Vira-lata", false);

echo $luly->mostrarDetalhe();
echo "Nome: $luly->nome";

$luly->latir();

$pudim = new gato("Pupu", "Preguiçoso", "Carnivoro", "Vira-lata", false);

echo $pudim->mostrarDetalhe();
echo "Nome: $pudim->apelido";

echo $pudim->miar();
