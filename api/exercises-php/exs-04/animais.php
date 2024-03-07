<?php

class Animal {
    protected $nome;
    protected $idade;
    protected $voa;

    public function __construct($nome, $idade, $voa) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->voa = $voa;
    }

    // Métodos de acesso
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function voar() {
        if ($this->voa) {
            echo "Voando... <br />";
        } else {
            echo "Este animal não voa. <br />";
        }
    }
}

class Cachorro extends Animal {
    public function late() {
        echo "O cachorro late: Au Au! <br />";
    }
}

class Gato extends Animal {
    public function mia() {
        echo "O gato mia: Miau Miau! <br />";
    }
}

class Cavalo extends Animal {
    public function relincha() {
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
