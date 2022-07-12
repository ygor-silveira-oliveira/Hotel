<?php

class Cliente{

    private $nome;
    private $rg;
    private $email;
    private $telefone;

    public function __construct($nome, $rg, $email, $telefone){
        $this->nome = $nome;
        $this->rg = $rg;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    
    public function getNome()
    {
        return $this->nome;
    }

    
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    

    
    public function getRg()
    {
        return $this->rg;
    }


    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    

    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    

    
    public function getTelefone()
    {
        return $this->telefone;
    }

    
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}


?>