<?php

class Produto{
    //Atributos
    protected $descricao;
    protected $unidadeMedida;
    
    //Métodos
    public function getDados(){
        $dados = "O produto tem a descrição" . $this->descricao; 
        $dados .= " e possui a unidade de medida" . $this->unidadeMedida;

        return $dados;
    }

    //GETs e SETs

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getUnidadeMedida()
    {
        return $this->unidadeMedida;
    }

    public function setUnidadeMedida($unidadeMedida): self
    {
        $this->unidadeMedida = $unidadeMedida;

        return $this;
    }
}