<?php
require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$funcionarios = array();

for ($i = 1; $i <= 5; $i++) {
    $func = new Funcionario();
    $func->setNome(readline("Insira o nome: "));
    $func->setCargo(readline("Insira o cargo: "));
    $func->setSalario(readline("Insira o salário: "));

    $dep = new Departamento();
    $dep->setNome(readline("Insira o nome do departamento: "));
    $dep->setNumeroSala(readline("Insira o número da sala: "));
    echo "\n";

    $func->setDepartamento($dep);

    array_push($funcionarios, $func);
}

//Percorrer o array e imprimir os dados dos funcionário

echo "Dados dos funcionários: \n";

foreach ($funcionarios as $f){
echo "Nome: " . $f->getNome() ;
echo ", Cargo: " . $f->getCargo() ;
echo ", Salário: " . $f->getSalario() ;
echo ", Departamento: " . $f->getDepartamento()->getNome();
echo ", Departamento: " . $f->getDepartamento()->getNumeroSala();
}