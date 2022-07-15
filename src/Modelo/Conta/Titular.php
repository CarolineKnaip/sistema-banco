<?php

namespace Work\Banco\Modelo\Conta;

use Work\Banco\Modelo\Autenticavel;
use Work\Banco\Modelo\Pessoa;
use Work\Banco\Modelo\Cpf;
use Work\Banco\Modelo\Endereco;


class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1111';
    }
}