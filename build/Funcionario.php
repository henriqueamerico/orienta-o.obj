<?php
require_once("Departamento.php");

class Funcionario
{
    private string $nome;
    private string $cargo;
    private float $salario;
    private Departamento $Departamento;

    

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


    public function getCargo(): string
    {
        return $this->cargo;
    }


    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }


    public function getSalario(): float
    {
        return $this->salario;
    }


    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }


    public function getDepartamento(): Departamento
    {
        return $this->Departamento;
    }


    public function setDepartamento(Departamento $Departamento): self
    {
        $this->Departamento = $Departamento;

        return $this;
    }
}
