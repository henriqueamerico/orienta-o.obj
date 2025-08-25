<?php
require_once("modelo/Carro.php");
require_once("modelo/Fabricante.php");

$vw = new Fabricante();
$vw->setNome("Volkswagem");
$vw->setSigla("VK");

$gm = new Fabricante();
$gm->setNome("Chevrolet");
$gm->setSigla("GM");

$f = new Fabricante();
$f->setNome("Fiat");
$f->setSigla("F");

$rn = new Fabricante();
$rn->setNome("Renault");
$rn->setSigla("RN");

$carros = [];

do {
    echo "\n\n----MENU-----\n";
    echo "1- Cadastrar carro\n";
    echo "2- Excluir carro\n";
    echo "3- Listar carros\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    echo "\n";

    if ($opcao == 1) {
        $car = new Carro();
        $car->setModelo(readline("Insira o modelo: "));
        $car->setAnoFabricacao(readline("Insira o ano de fabricação: "));

        echo "Escolha o fabricante (VW, GM, F, RN): ";
        $sigla = readline();
        $fabEscolhida;

        if ($sigla == "VW") {
            $fabEscolhida = $vw;
        } elseif ($sigla == "GM") {
            $fabEscolhida = $gm;
        } elseif ($sigla == "F") {
            $fabEscolhida = $f;
        } elseif ($sigla == "RN") {
            $fabEscolhida = $rn;
        }

        $car->setFabricante($fabEscolhida);
        $carros[] = $car;
        echo "Carro cadastrado com sucesso!\n";
    }
    if ($opcao == 2) {
        if ($carros) {
            foreach ($carros as $i => $c) {
                echo $i . " - " . $c->getModelo() .
                    " " . $c->getAnoFabricacao() . " | " .
                    $c->getFabricante()->getNome() . "\n";
            }
        }
        $indiceRemocao = readline("Informe o índice do carro para ser excluído ");

        array_splice($carros, $indiceRemocao, 1);
        echo "Carro removido com sucesso!\n";

        foreach ($carros as $c) {
            echo $c->getModelo() . " (" . $c->getAnoFabricacao() . ") - " . $c->getFabricante()->getNome() . "\n";
        }
    } elseif ($opcao == 3) {
        echo "Dados dos carros:\n";
        foreach ($carros as $c) {
            echo "Modelo: " . $c->getModelo() . " | Ano fabricação: " . $c->getAnoFabricacao() . " | Fabricante: " . $c->getFabricante()->getNome() . "\n";
        }
    }
} while ($opcao != 0);
