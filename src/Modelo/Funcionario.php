<?php

namespace Work\Banco\Modelo;

use Work\Banco\Modelo\Pessoa;

class Funcionario extends Pessoa
{

    private string $cargo;
    private float $salario;


    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
        $this->salario = $salario;
 
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
    
    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function alteraNome(string $nome): void
    {   
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario *0.01;
    }
}