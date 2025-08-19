<?php

class Estado
{

    private string $nome;
    private string $sigla;

    //GETs e SETs

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    public function getSigla()
    {
        return $this->sigla;
    }


    public function setSigla($sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
}
