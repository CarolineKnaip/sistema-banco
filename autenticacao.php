<?php

use Work\Banco\Service\Autenticador;
use Work\Banco\Modelo\Funcionario\Diretor;
use Work\Banco\Modelo\Cpf;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'Joao Dias',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');