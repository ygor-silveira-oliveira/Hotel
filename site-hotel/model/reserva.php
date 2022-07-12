<?php

class Reserva{

    
    private $cliente;
    private $quarto;
    private $quantidadeDiarias;
    
    


    public function __construct($cliente, $quarto, $quantidadeDiarias)
    {
    
        $this->cliente = $cliente;
        $this->quarto = $quarto;
        $this->quantidadeDiarias = $quantidadeDiarias;
    }

    public function getPrecoTotal(){
        return $this->quantidadeDiarias * $this->quarto->obterPreco();
    }

    
    public function getCliente()
    {
        return $this->cliente;
    }

    
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    


    public function getQuarto()
    {
        return $this->quarto;
    }

    
    public function setQuarto($quarto)
    {
        $this->quarto = $quarto;

        return $this;
    }




    public function getQuantidadeDiarias()
    {
        return $this->quantidadeDiarias;
    }

    public function setQuantidadeDiarias($quantidadeDiarias)
    {
        $this->quantidadeDiarias = $quantidadeDiarias;

        return $this;
    }

    public function toString(){
        return '<p>'.$this->cliente->getNome().'</p><p>'.$this->cliente->getEmail().'</p><p>'.$this->cliente->getTelefone().'</p><p>'.$this->cliente->getRg().'</p><p>'.$this->quantidadeDiarias.'</p> <p>'.$this->quarto->getNome().'</p><p>'.$this->getPrecoTotal().'</p>'
        
        
        ;
    }
}

?>