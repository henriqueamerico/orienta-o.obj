<?php
require_once("modelo/Aluno.php");
require_once("modelo/Turma.php");
$turma = new Turma();
$turma->setNome("Turma 2025");
$turma->setCurso("Técnico em Desenvolvimento de sistemas");

for ($i=1; $i<=5; $i++) {
    $aluno = new Aluno();
    $aluno->setNome(readline("Insira o nome: "));
     $aluno->setIdade(readline("Insira a idade: "));
      $aluno->setTurma($turma);

      $turma->addAluno($aluno);

}

echo "Dados da turma:\n";
echo "Nome: " . $turma->getNome() . " | Curso: " . $turma->getCurso() . "\n";

echo "Alunos:\n";
foreach($turma->getAlunos() as $a)
    echo " - " . $a->getNome() . " | " . $a->getIdade() . " anos\n";
