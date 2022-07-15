<?php

namespace Work\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar (string $senha):bool;
}