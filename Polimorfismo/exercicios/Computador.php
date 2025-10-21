<?php
require_once("Produto.php");

class Computador extends Produto{
    private $processador;
    private $memoria;

    public function getDados()
    {
          "O computador tem a descrição" . $this->getDescricao() . ", unidade de medida" . 
          $this->getUnidadeMedida() . ", possui o processador" . $this->getProcessador() . 
          " e possui a memória " . $this->getMemoria();
    }

    //GETs e SETs

    public function getProcessador()
    {
        return $this->processador;
    }

    public function setProcessador($processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function getMemoria()
    {
        return $this->memoria;
    }

    public function setMemoria($memoria): self
    {
        $this->memoria = $memoria;

        return $this;
    }
}