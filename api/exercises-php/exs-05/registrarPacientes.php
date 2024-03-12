<?php

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
