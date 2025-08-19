<?php

require_once("modelo/Estado.php");
require_once("modelo/Cidade.php");

//Objeto do tipo Estado
$sc = new Estado();
$sc->setNome("Santa Catarina");
$sc->setSigla("SC");

$pr = new Estado();
$pr->setNome("Paraná");
$pr->setSigla("PR");


//Objeto do tipo Cidade
$flo = new Cidade();
$flo->setNome("Florianópolis");
$flo->setQtdHabitantes(576.361);
$flo->setAltitude(3);
$flo->setEstado($sc);

$blu = new Cidade();
$blu->setNome("Blumenau");
$blu->setQtdHabitantes(380.597);
$blu->setAltitude(21);
$blu->setEstado($sc);

$foz = new Cidade();
$foz->setNome("Foz do Iguaçu");
$foz->setQtdHabitantes(295.500);
$foz->setAltitude(200);
$foz->setEstado($pr);

$cas = new Cidade();
$cas->setNome("Cascavel");
$cas->setQtdHabitantes(364.104);
$cas->setAltitude(781);
$cas->setEstado($pr);

$cidades = array($flo, $blu, $foz, $cas);

foreach($cidades as $c){
    printf(
        "A cidade de %s, localizada no estado %s-%s, possui %d habitantes e uma altitude de %d metros.\n",
        $c->getNome(),
        $c->getEstado()->getNome(),
        $c->getEstado()->getSigla(),
        $c->getQtdHabitantes(),
        $c->getAltitude()
    );
}

