<?php

namespace Work\Banco\Service;

use Work\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacao =0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacao += $funcionario -> calculaBonificacao();
    }

    public function recuperaTotal():float
    {
        return $this->totalBonificacao;
    }
}