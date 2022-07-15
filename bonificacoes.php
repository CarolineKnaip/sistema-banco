<?php

require_once 'autoload.php';

use Work\Banco\Modelo\Cpf;
use Work\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor, Desenvolvedor};
use Work\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Julio Dias',
    new Cpf('123.456.789-10'),
    1000
);

$umaFuncionaria = new Gerente(
    'Amanda Dias',
    new Cpf('122.432.442-10'),
    3000
);


$outraFuncionaria = new Diretor(
    'Joana Dias',
    new Cpf('122.432.442-10'),
    5000
);

$controlador = new ControladorDeBonificacoes();
$controlador ->adicionaBonificacaoDe($umFuncionario);
$controlador ->adicionaBonificacaoDe($umaFuncionaria);
$controlador ->adicionaBonificacaoDe($outraFuncionaria);


echo $controlador->recuperaTotal();

