<?php

class Paciente {
    private $nome;
    private $idade;
    private $historicoMedico = [];

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function cadastrarHistorico($evento) {
        $this->historicoMedico[] = $evento;
        echo "Histórico cadastrado com sucesso para o paciente {$this->nome}.<br />";
        echo "<hr>";
    }

    public function mostrarHistorico() {
        echo "Histórico médico do paciente {$this->nome}:<br />";
        print_r($this->historicoMedico);
        echo "<hr>";
        return $this->historicoMedico;
    }

    public function atualizarHistorico($indice, $novoEvento) {
        if ($this->existeIndice($indice)) {
            $this->historicoMedico[$indice] = $novoEvento;
            echo "Histórico atualizado com sucesso para o paciente {$this->nome}.<br />";
        } else {
            echo "Índice inválido. Atualização falhou para o paciente {$this->nome}.<br />";
        }
        echo "<hr>";
    }

    public function deletarHistorico($indice) {
        if ($this->existeIndice($indice)) {
            unset($this->historicoMedico[$indice]);
            $this->historicoMedico = array_values($this->historicoMedico);
            echo "Histórico deletado com sucesso para o paciente {$this->nome}.<br />";
        } else {
            echo "Índice inválido. Deleção falhou para o paciente {$this->nome}.<br />";
        }
        echo "<hr>";
    }

    private function existeIndice($indice) {
        return isset($this->historicoMedico[$indice]);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}