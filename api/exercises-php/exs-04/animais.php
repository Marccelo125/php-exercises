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
?>
