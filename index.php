<?php

require_once 'Funcionario.php';
require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$funcionario = new Funcionario ('Samuel', 5.500);
$funcionario->linguagemPrincipal();

echo '<br>';

$gerente = new Gerente('Ariel', 10000, 'Tecnologia');
$gerente->gerenciarEquipe();

echo '<br>';

$dev = new Desenvolvedor('Samuel', 5500, 'PHP');
$dev->programar();
?>