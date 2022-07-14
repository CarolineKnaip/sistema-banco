<?php

class Titular
{
    private $cpf;
    private $nome;
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->Cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf():string
    {
        return $this->Cpf->recuperaNumero();
    }

    public function recuperaNome():string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if(strlen($nomeTitular)<5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}