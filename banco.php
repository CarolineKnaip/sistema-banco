<?php

use Work\Banco\Modelo\Conta\Titular;
use Work\Banco\Modelo\Conta\Conta;
use Work\Banco\Modelo\Cpf;
use Work\Banco\Modelo\Endereco;

$endereco = new Endereco ('Petrópolis', 'Um bairro', 'minha rua', '71B');
$vinicius = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new Cpf('123.654.789-01'), 'Abcdefg', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();