<?php

use Work\Banco\Modelo\Conta\ContaPoupanca;
use Work\Banco\Modelo\Conta\ContaCorrente;

use Work\Banco\Modelo\Conta\Titular;
use Work\Banco\Modelo\Cpf;
use Work\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaTeste2 = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
            'Amanda Dias',
        new Endereco('Petrópolis', 'bairro teste', 'rua lá', '123')
    )
    );

$contaTeste2->deposita(500);
$contaTeste2->saca(100);

echo $contaTeste2->recuperaSaldo() . PHP_EOL;


$contaTeste = new ContaPoupanca(
    new Titular(
        new Cpf('122.432.154-74'),
            'Julio Dias',
        new Endereco('Petrópolis', 'bairro teste', 'rua lá', '123')
    )
    );

$contaTeste->deposita(500);
$contaTeste->saca(100);

echo $contaTeste->recuperaSaldo() . PHP_EOL;