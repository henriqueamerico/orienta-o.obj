<?php
require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$cm = new Prato();
$cm->setNome("Camarão à Milanesa");
$cm->setNumero(1);
$cm->setValor(110.00);

$pm = new Prato();
$pm->setNome("Pizza Margherita");
$pm->setNumero(2);
$pm->setValor(80.00);

$mc = new Prato();
$mc->setNome("Macarrão à Carbonara");
$mc->setNumero(3);
$mc->setValor(60.00);

$bp = new Prato();
$bp->setNome("Bife à Parmegiana");
$bp->setNumero(4);
$bp->setValor(75.00);

$rf = new Prato();
$rf->setNome("Risoto ao Funghi ");
$rf->setNumero(5);
$rf->setValor(70.00);


$pratos = array($cm, $pm, $mc, $bp, $rf);
$pedidos = array();

do {
    echo "\n\n----MENU-----\n";
    echo "1- Cadastrar\n";
    echo "2- Cancelar\n";
    echo "3- Listar\n";
    echo "4- Total de vendas\n";
    echo "0- Sair\n";
    echo "\n";
    echo ("Seja muito bem vindo(a) ao restaurante Bona Comida \n");
    $opcao = readline("Informe a opção que deseja: ");
    echo "\n";

    if ($opcao == 1) {
        $ped = new Pedido();
        $ped->setNomeCliente(readline("Insira seu nome: "));
        $ped->setNomeGarcom(readline("Insira o nome do garçom: "));

        //Mostrar os pratos
        echo "\n\n====Pratos disponíveis====\n";
        foreach($pratos as $p){
            echo $p . "\n";
        }
        //Informe o número do prato
        $numero = readline(("Escolha o número do prato de 1 à 5:"));
        $numEscolhido = null;

        if ($numero == 1) {
            $numEscolhido = $cm;
        } elseif ($numero == 2) {
            $numEscolhido = $pm;
        } elseif ($numero == 3) {
            $numEscolhido = $mc;
        } elseif ($numero == 4) {
            $numEscolhido = $bp;
        } elseif ($numero == 5) {
            $numEscolhido = $rf;
        }


        $ped->setPrato($numEscolhido);

        array_push($pedidos, $ped);
    }

    if ($opcao == 2) {

    }

    if ($opcao == 3) {
        print_r($pedidos);
    }


} while ($opcao != 0);
echo ("Programa finalizado! \n");


