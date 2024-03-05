<?php

// Classe base Animal
class Animal {
    protected $nome;
    protected $idade;

    // Construtor da classe
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Métodos de acesso
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    // Comportamento comum a todos os animais
    public function emiteSom() {
        echo "O animal emite um som." . "<br />";
    }
}

// Classe Cachorro que estende de Animal
class Cachorro extends Animal {
    // Comportamento específico para Cachorro
    public function late() {
        echo "O cachorro late: Au Au!" . "<br />";
    }
}

// Classe Gato que estende de Animal
class Gato extends Animal {
    // Comportamento específico para Gato
    public function mia() {
        echo "O gato mia: Miau Miau!" . "<br />";
    }
}

// Classe Cavalo que estende de Animal
class Cavalo extends Animal {
    // Comportamento específico para Cavalo
    public function relincha() {
        echo "O cavalo relincha: Hiiiiin!" . "<br />";
    }
}

// Exemplos de uso
$cachorro = new Cachorro("Tininha", 5);
echo "Nome do cachorro: " . $cachorro->getNome() . "<br />";
echo "Idade do cachorro: " . $cachorro->getIdade() . " anos" . "<br />";
$cachorro->emiteSom();
$cachorro->late();

echo "<hr>";

$gato = new Gato("Pudim", 1);
echo "Nome do gato: " . $gato->getNome() . "<br />";
echo "Idade do gato: " . $gato->getIdade() . " anos" . "<br />";
$gato->emiteSom();
$gato->mia();

echo "<hr>";

$cavalo = new Cavalo("Trovão", 12);
echo "Nome do cavalo: " . $cavalo->getNome() . "<br />";
echo "Idade do cavalo: " . $cavalo->getIdade() . " anos" . "<br />";
$cavalo->emiteSom();
$cavalo->relincha();

?>
