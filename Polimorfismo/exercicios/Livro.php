<?php
require_once("Produto.php");

class Livro extends Produto {
    //Atributos
    private $autor;

    //Métodos
    public function getDados()
    {
        "O balde tem a descrição" . $this->getDescricao() . ", unidade de medida" 
        . $this->getUnidadeMedida() . "e possui a capacidade de" . $this->getAutor();
    }

    //GETs e SETs
    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }
}