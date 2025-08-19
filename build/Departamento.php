<?php

class Departamento{
    private string $nome;
    private int $numeroSala;


    //GETs e SETs
    
    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    public function getNumeroSala(): int
    {
        return $this->numeroSala;
    }

 function setNumeroSala(int $numeroSala): self
    {
        $this->numeroSala = $numeroSala;

        return $this;
    }
}