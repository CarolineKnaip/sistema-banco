<?php

namespace Work\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{

    public function sobeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }

}