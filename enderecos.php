<?php

use Work\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Paulo', 'bairro123', 'Avenida Brasil', '123');

$outroEndereco = new Endereco('Rio', 'bairro aleatorio', 'outra rua', '50');

// echo $umEndereço->cidade;
$umEndereco->bairro = 'Jardim Paulista';
echo $umEndereco;

echo $umEndereco->rua;
