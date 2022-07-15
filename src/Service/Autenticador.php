<?php

namespace Work\Banco\Service;

use Work\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha):void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Ok. Usuario logado no sistema";
        } else {
            echo "Senha Incorreta";
        }
    }


}