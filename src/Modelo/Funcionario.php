<?php

namespace Work\Banco\Modelo;

use Work\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{

    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
 
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }
}