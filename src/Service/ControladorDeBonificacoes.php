<?php

namespace Work\Banco\Service;

use Work\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBoniticacao += $funcionario -> calculaBonificacao();
    }

    public function recuperaTotal():float
    {
        return $this->totalBonificacao;
    }
}