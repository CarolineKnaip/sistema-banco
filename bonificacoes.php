<?php

require_once 'autoload.php';

use Work\Banco\Modelo\Cpf;
use Work\Banco\Modelo\Funcionario;
use Work\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Amanda Dias',
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Julio Dias',
    new Cpf('122.432.442-10'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador ->adicionaBonificacaoDe($umFuncionario);
$controlador ->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();

