<?php

class Quarto{

    private $nome;
   

    public function __construct($nome){
        $this->nome = $nome;
    }
   

    public function obterPreco(){
        $preco = "";

        switch($this->nome){
            case 'Suite Double Master':
                $preco = 150;
                break;

            case 'Suite Familia':
                $preco = 180;
                break;

            case 'Suiter Single':
                $preco = 100;
                break;
        }
        return $preco;
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


    




}

?>