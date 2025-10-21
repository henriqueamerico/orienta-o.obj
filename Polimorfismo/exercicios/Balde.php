<?php
require_once("Produto.php");

class Balde extends Produto
{
    //Atributos
    private $capacidade;

    //Métodos
    public function getDados()
    {
        "O balde tem a descrição" . $this->getDescricao() . ", unidade de medida" 
        . $this->getUnidadeMedida() . "e possui a capacidade de" . $this->getCapacidade();
    }

    // GETs e SETs 
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}
