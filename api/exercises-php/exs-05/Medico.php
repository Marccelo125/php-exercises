<?php 
require_once("./Paciente.php");

class Medico {
    private $nome;
    private $pacientes = [];
    private $especialidade;

    public function __construct($nome, $especialidade) {
        $this->nome = $nome;
        $this->especialidade = $especialidade;
    }

    public function adicionarPaciente(Paciente $paciente) {
        $this->pacientes[] = $paciente;
        echo "Paciente {$paciente->getNome()} adicionado com sucesso para o médico {$this->nome}.<br />";
        echo "<hr>";
    }

    public function listarPacientes() {
        echo "Lista de pacientes para o médico {$this->nome}:<br />";
        foreach ($this->pacientes as $paciente) {
            echo "- {$paciente->getNome()}<br />";
        }
        echo "<hr>";
        return $this->pacientes;
    }

    public function getHistorico() {
        echo "Histórico completo para o médico {$this->nome}:<br />";
        $historicoCompleto = [];

        foreach ($this->pacientes as $paciente) {
            $historicoCompleto[$paciente->getNome()] = $paciente->mostrarHistorico();
        }

        return $historicoCompleto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }
}
