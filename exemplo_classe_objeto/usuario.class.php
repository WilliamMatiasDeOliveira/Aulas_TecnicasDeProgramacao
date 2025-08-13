<?php

class Usuario
{
    public function __construct(
        private string $nome = "", 
        private string $email = "", 
        private string $senha = ""
        ) {}


    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }

    public function setEmail($novo_email){
        $this->email = $novo_email;
    }

    public function setSenha($nova_senha){
        $this->senha = $nova_senha;
    }

}


