<?php

namespace Work\Banco\Modelo\Funcionario;

use Work\Banco\Modelo\Pessoa;
use Work\Banco\Modelo\Cpf;

abstract class Funcionario extends Pessoa
{

    private float $salario;


    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->validaNome($nome);
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
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recebeAumento(float $valorAumento):void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario+= $valorAumento;
    }
    
    abstract public function calculaBonificacao(): float;
    
}